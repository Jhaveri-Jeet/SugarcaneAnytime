<?php

namespace App\Http\Controllers;

use App\Models\orders;
use App\Models\products;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function index()
    {
        return view('shop', ['products' => products::get()]);
    }

    public function createOrder(Request $request)
    {
        $oldOrder = orders::where('productId', $request->productId)->where('userId', $request->userId)->where('status', 'pending')->first();

        if ($oldOrder) {
            $oldOrder->quantity +=  1;
            $oldOrder->price = $oldOrder->quantity * $request->price;
            $oldOrder->save();
            return response()->json(['success' => 'Old Order created successfully']);
        }
        $order = new orders();
        $order->userId = $request->userId;
        $order->productId = $request->productId;
        $order->quantity = $request->quantity;
        $order->price = $request->price;

        $order->save();
        return response()->json(['success' => 'Order created successfully']);
    }
}
