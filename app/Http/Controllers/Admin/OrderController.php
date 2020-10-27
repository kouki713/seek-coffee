<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.oeder.index');
    }

    public function show()
    {
        return view('admin.order.show');
    }

    public function update()
    {
        
    }
}
