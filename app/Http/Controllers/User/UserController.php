<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class UserController extends Controller
{
    public function index()
    {
        $user = \Auth::user();
        $orders = $user->orders;

        return view('user.user.index', compact('user', 'orders'));
    }
}
