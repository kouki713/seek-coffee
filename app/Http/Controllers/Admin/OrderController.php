<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('admin.order.index', compact);
    }

    public function show($order)
    {
        return view('admin.order.show');
    }

    public function update()
    {
        
    }
}
