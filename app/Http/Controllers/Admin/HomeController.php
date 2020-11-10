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
        
        // 今月の注文
        $dt_from = new \Carbon\Carbon();
		$dt_from->startOfMonth();
		$dt_to = new \Carbon\Carbon();
		$dt_to->endOfMonth();
		$orders = Order::whereBetween('created_at', [$dt_from, $dt_to])->get();

        // 今日の注文
        $orders4 = Order::whereDate('created_at', today())->get();

        // 昨日の注文
        $yesterday = new \Carbon\Carbon();
        $yesterday->yesterday();
        $orders5 = Order::whereDate('created_at', $yesterday)->get();

        // 今日の売り上げ
        $today_price = 0;
        foreach ($orders4 as $order) {
            foreach ($order->order_details as $detail) {
                $today_price = $detail->total_price + $today_price;
            };
        };
        

        // 昨日の売り上げ
        $yesterday_price = 0;
        foreach ($orders5 as $order) {
            foreach ($order->order_details as $detail) {
                $yesterday_price = $detail->total_price + $yesterday_price;
            };
        };

        // 今月の売り上げ
        $month_price = 0;
        foreach ($orders as $order) {
            foreach ($order->order_details as $detail) {
                $month_price = $detail->total_price + $month_price;
            };
        };

        // 在庫切れ商品
        $items = Item::where('num', '<=', '5')->get();

        return view('admin.home', compact(
        'orders1',
        'orders2',
        'orders3',
        'orders4',
        'orders5',
        'users',
        'contacts',
        'contacts2',
        'orders',
        'today_price',
        'yesterday_price',
        'month_price',
        'items'
        ));
    }
}
