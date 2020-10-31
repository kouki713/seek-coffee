<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Delivery;

class deliveryController extends Controller
{
    public function index()
    {
        $user = \Auth::user();

        $deliverys = $user->deliverys;

        return view('user.delivery.index', compact('deliverys', 'user'));
    }

    public function store()
    {
        
    }

    public function edit()
    {
        return view('user.delivery.edit');
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }
}
