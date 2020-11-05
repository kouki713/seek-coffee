<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Delivery;
use App\Models\Item;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    public function create()
    {
        $carts = \Auth::user()->carts;
        $deliverys = \Auth::user()->deliverys;

        return view('user.order.create', compact('carts', 'deliverys'));
    }

    public function confirm(Request $request)
    {
        $carts = \Auth::user()->carts;
        $deliverys = \Auth::user()->deliverys;

        $order = new Order;
        if ( $request->deli == "new" ) 
        {
            $order->address_name = $request->input('address_name');
            $order->postal_code = $request->input('postal_code');
            $order->address = $request->input('address');
            $order->phone_number = $request->input('phone_number');
            $order->memo = $request->input('memo');
            $deli = $request->deli;
        }
        else
        {
            $delivery = Delivery::where('id', $request->deli)->first();
            $order->address_name = $delivery->address_name;
            $order->postal_code = $delivery->postal_code;
            $order->address = $delivery->address;
            $order->phone_number = $delivery->phone_number;
            $order->memo = $request->input('memo');
            $deli = "old";
        }
       

        return view('user.order.confirm', compact('order', 'deli', 'carts'));
    }

    public function store(Request $request)
    {
        $user = \Auth::user();
        $carts = $user->carts;

        if ( $request->deli == "new" ) 
        {
            $delivery = new Delivery;

            $delivery->user_id = $user->id;
            $delivery->address_name = $request->input('address_name');
            $delivery->postal_code = $request->input('postal_code');
            $delivery->address = $request->input('address');
            $delivery->phone_number = $request->input('phone_number');

            $delivery->save();
        }

        $order = new Order;

        $order->user_id = $user->id;
        $order->address_name = $request->input('address_name');
        $order->postal_code = $request->input('postal_code');
        $order->address = $request->input('address');
        $order->phone_number = $request->input('phone_number');
        $order->memo = $request->input('memo');
        $order->order_status = '1';
        $order->reception_time = now();
        $order->shipping_time = now();

       
        $order->save();


        foreach ($carts as $cart) 
        {  
            $order_detail = new OrderDetail;
            
            $order_detail->order_id = $order->id;
            $order_detail->item_id = $cart->item->id;
            $order_detail->price = $cart->item->price;
            $order_detail->num = $cart->num;
            $order_detail->total_price = $cart->item->price * $cart->num;
            $order_detail->save();

            $item = Item::where('id', $cart->item->id)->first();
            $item->num = $item->num - $order_detail->num;            

            $item->save();

            $cart->delete();
        }


        return redirect()->route('user.order.finish');
    }

    public function finish()
    {
        return view('user.order.finish');
    }

    public function about()
    {
        return view('user.order.about');
    }

    public function show($order)
    {
        $order = Order::find($order);

                
        return view('user.order.show', compact('order'));
    }


}
