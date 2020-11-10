<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Item;
use App\Models\User;
use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders1 = Order::where('order_status', 1)->get(); 
        $orders2 = Order::where('order_status', 2)->get(); 
        $orders3 = Order::where('order_status', 3)->get();

        $users = User::all();

        $contacts = Contact::where('contact_status', 1)->get();  
        $contacts2 = Contact::where('contact_status', 2)->get();  

        

        return view('admin.home', compact(
        'orders1',
        'orders2',
        'orders3',
        'users',
        'contacts',
        'contacts2',
        ));
    }
}
