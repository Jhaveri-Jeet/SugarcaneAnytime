<?php

namespace App\Http\Controllers;

use App\Models\orders;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class orderController extends Controller
{
    public function adminIndex()
    {
        $orders = orders::with('user', 'product')->get();
        return view('admin.orders', ['orders' => $orders]);
    }

    public function completeOrder($id)
    {
        $order = orders::where('id', $id)->first();
        $order->status = 'completed';

        $product = products::where('id', $order->productId)->first();
        $product->currentQuantity = $product->currentQuantity - $order->quantity;

        $order->save();
        $product->save();
        return back();
    }

    public function notAvailable($id)
    {
        $order = orders::where('id', $id)->first();
        $order->status = 'notAvailable';

        $order->save();
        return back();
    }

    public function userIndex()
    {
        $userId = Auth::user()->id;
        $order =  orders::where('userId', $userId)->where('status', 'pending')->get();
        if ($order) {

            $totalQuantity = orders::where('userId', $userId)->where('status', 'pending')->sum('quantity');
            $totalPrice = orders::where('userId', $userId)->where('status', 'pending')->sum('price');

            return view('cart', ['orders' => $order, 'totalQuantity' => $totalQuantity, 'totalPrice' => $totalPrice]);
        } else {
            return view('cart', ['orders' => null, 'totalQuantity' => 0, 'totalPrice' => 0]);
        }
    }

    public function getAllUserOrders()
    {
        $userId = Auth::user()->id;
        return view('/orders', ['orders' => orders::where('userId', $userId)->get()]);
    }

    public function removeOrder(Request $request)
    {
        $order = orders::where('productId', $request->productId)->where('userId', $request->userId)->where('status', 'pending')->first();
        $order->delete();

        return response()->json(['success' => 'Order removed successfully']);
    }

    public function purchaseOrder($id)
    {
        $orders = orders::where('userId', $id)->where('status', 'pending')->get();
        if ($orders->isEmpty()) {
            return back();
        }

        foreach ($orders as $order) {
            $order->status = 'ordered';
            $order->save();
        }
        return redirect('/orders');
    }
}
