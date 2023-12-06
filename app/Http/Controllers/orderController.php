<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index()
    {
        $orders = orders::with('user', 'product')->get();
        return view('admin.orders', ['orders' => $orders]);
    }

    public function completeOrder($id)
    {
        $order = orders::where('id', $id)->first();
        $order->status = 'completed';

        $order->save();
        return back();
    }
    
    public function notAvailable($id)
    {
        $order = orders::where('id', $id)->first();
        $order->status = 'notAvailable';

        $order->save();
        return back();
    }
}
