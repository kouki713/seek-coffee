<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:user');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::limit(6)->get();

        return view('user.home', compact('items'));
    }

    public function top()
    {
        return view('user.top');
    }

    public function about()
    {
        return view('user.about');
    }

    public function store_about()
    {
        return view('user.store_about');
    }
}
