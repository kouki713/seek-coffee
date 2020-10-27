<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('user.order.create');
    }

    public function confirm()
    {
        return view('user.order.confirm');
    }

    public function store()
    {
        
    }

    public function finish()
    {
        return view('user.order.finish');
    }

    public function about()
    {
        return view('user.order.about');
    }
}
