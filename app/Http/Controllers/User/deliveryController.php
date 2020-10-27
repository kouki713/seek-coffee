<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class deliveryController extends Controller
{
    public function index()
    {
        return view('user.delivery.index');
    }

    public function store()
    {
        
    }

    public function edit()
    {
        return view('user.delivery');
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }
}
