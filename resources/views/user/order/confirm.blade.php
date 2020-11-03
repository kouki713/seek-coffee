注文確認ページ
@extends('layouts.user.app')
@section('content')
<div class="order">
    <div class="order-create">
        <form method="POST" action="{{route('user.order.store')}}">
            @csrf
            <p>連絡先</p>
            <p>{{ Auth::user()->email }}</p>
            <p>配送先</p>
            <p>{{ $order->address_name }}</p>
            <input type="hidden" name="address_name" value="{{ $order->address_name }}" class="input">
            <p>{{ $order->postal_code }}</p>
            <input type="hidden" name="postal_code" value="{{ $order->postal_code }}" class="input">
            <p>{{ $order->address }}</p>
            <input type="hidden" name="address" value="{{ $order->address }}" class="input">
            <p>{{ $order->phone_number }}</p>
            <input type="hidden" name="phone_number" value="{{ $order->phone_number }}" class="input">
            <p>備考</p>
            <p>{{ $order->memo }}</p>
            <input type="hidden" name="memo" value="{{ $order->memo }}" class="input">
            <input type="hidden" name="deli" value="{{ $deli }}">
            <input type="submit" value="確認画面へ">
        </form>
    </div>
    <div class="order-cart">
        <table>
            <?php $total_price = 0 ?>
            @foreach ($carts as $cart)
                <tr>
                    <td>
                        <img src="../../uploads/{{ $cart->item->item_image }}" style="width:130px; height:80px;">
                        {{ $cart->item->item_name }}
                    </td>
                    <td>
                        <?php $price = $cart->item->price * $cart->num ?>
                        ¥{{ number_format($price) }}
                    </td>
                </tr>
                <?php $total_price = $total_price + $price ?>
            @endforeach
            <tr>
                <td>小計</td>
                <td>¥{{ number_format($total_price) }}</td>
            </tr>
            <tr>
                <td>送料</td>
                <td>¥800</td>
            </tr>
            <tr>
                <td>合計</td>
                <td>
                    ¥{{ number_format($total_price + 800) }}
                </td>
            </tr>
        </table>
        
    </div>
</div>

@endsection
