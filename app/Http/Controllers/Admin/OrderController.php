<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders1 = Order::where('order_status', 1)->get(); 
        $orders2 = Order::where('order_status', 2)->get(); 
        $orders3 = Order::where('order_status', 3)->get();
        $orders4 = Order::where('order_status', 4)->get(); 
 

        return view('admin.order.index', compact('orders1', 'orders2', 'orders3', 'orders4'));
    }

    public function show($order)
    {
        $order = Order::find($order);

        return view('admin.order.show', compact('order'));
    }

    public function update(Request $request, $order)
    {
        $order = Order::find($order);

        $order->order_status = $request->order_status;
        $order->save();

        return redirect()->route('admin.order.index');
    }
}
