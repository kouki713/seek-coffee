@extends('layouts.user.app')
@section('content')

<div class="content-header">
    <div class="header-nav">
        <p>カート</p>
        <span><i class="fas fa-chevron-right"></i></span>
        <p>購入情報入力</p>
        <span><i class="fas fa-chevron-right"></i></span>
        <h4 class="order-status">確認画面</h4>
        <span><i class="fas fa-chevron-right"></i></span>
        <p>完了</p>
    </div>
</div>
<div class="order">
    <div class="order-confirm">
        <form method="POST" action="{{route('user.order.store')}}">
            @csrf
            <div class="confirm-name">
                <p>連絡先：{{ Auth::user()->email }}</p>
            </div>
            <div class="confirm-pay">
                <p>支払い方法：クレジットカード</p>
            </div>
            <div class="confirm-delivery">
                <p>配送先</p>
                <p>宛先：{{ $order->address_name }}</p>
                <input type="hidden" name="address_name" value="{{ $order->address_name }}" class="input">
                <p>〒{{ $order->postal_code }}</p>
                <input type="hidden" name="postal_code" value="{{ $order->postal_code }}" class="input">
                <p>{{ $order->address }}</p>
                <input type="hidden" name="address" value="{{ $order->address }}" class="input">
                <p>TEL{{ $order->phone_number }}</p>
                <input type="hidden" name="phone_number" value="{{ $order->phone_number }}" class="input">
            </div>
            <div class="confirm-memo">
                <p>備考</p>
                <p>{{ $order->memo }}</p>
                <input type="hidden" name="memo" value="{{ $order->memo }}" class="input">
                <input type="hidden" name="deli" value="{{ $deli }}">
            </div>
            <div class="btn">
                <div class="back-btn">
                    <a href="#"><i class="fas fa-chevron-left"></i> 購入情報入力に戻る</a>
                </div>
                <div class="confirm-btn">
                    <input type="submit" value="注文を確定する">
                </div>
            </div>
        </form>
    </div>
    <div class="order-cart">
        <table>
            <?php $total_price = 0 ?>
            @foreach ($carts as $cart)
                <tr>
                    <td class="cart-image">
                        <img src="../../uploads/{{ $cart->item->item_image }}" style="width:100px; height:60px;">
                        <p class="title">{{ $cart->item->item_name }}</p>
                    </td>
                    <td class="cart-image-price">
                        <?php $price = $cart->item->price * $cart->num ?>
                        <p>¥{{ number_format($price) }}</p>
                    </td>
                </tr>
                <?php $total_price = $total_price + $price ?>
            @endforeach
            <tr class="price">
                <td>小計</td>
                <td>¥{{ number_format($total_price) }}</td>
            </tr>
            <tr class="send">
                <td>送料</td>
                <td>¥800</td>
            </tr>
            <tr class="total">
                <td>合計</td>
                <td>
                    <p>¥{{ number_format($total_price + 800) }}</p>
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection
