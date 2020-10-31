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

    public function store(Request $request)
    {

        $delivery = new Delivery;
        $user = \Auth::user();

        $delivery->user_id = $user->id;
        $delivery->address_name = $request->input('address_name');
        $delivery->postal_code = $request->input('postal_code');
        $delivery->address = $request->input('address');
        $delivery->phone_number = $request->input('phone_number');

        $delivery->save();
    

        return back();
    }

    public function edit($delivery)
    {
        $delivery = Delivery::find($delivery);

        return view('user.delivery.edit', compact('delivery'));
    }

    public function update(Request $request, $delivery)
    {
        $delivery = Delivery::find($delivery);

        $delivery->address_name = $request->input('address_name');
        $delivery->postal_code = $request->input('postal_code');
        $delivery->address = $request->input('address');
        $delivery->phone_number = $request->input('phone_number');

        $delivery->save();

        return redirect()->route('user.delivery.index');
    }

    public function destroy($delivery)
    {
        $delivery = Delivery::find($delivery);
        $delivery->delete();

        return back();
    }
}
