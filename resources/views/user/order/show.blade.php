@extends('layouts.user.app')
@section('content')
<div class="content-header user-ind">
    <h1 class="title">注文履歴</h1>
    <a href="{{ route('user.logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <p>ログアウト<span>→</span></p>
    </a>
    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>  
</div>
<div class="order">
    <div class="order-confirm"> 
        <div class="confirm-name">
            <p>注文日時：{{ $order->created_at->format('Y年m月d日') }}</p>
        </div>
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
        </div>
        <div class="btn">
            <div class="back-btn">
                <a href="{{ route('user.user.index') }}"><i class="fas fa-chevron-left"></i>　戻る</a>
            </div>
        </div>        
    </div>
    <div class="order-cart">
        <table>
            <?php $total_price = 0 ?>
            @foreach ($order->order_details as $detail)
                <tr>
                    <td class="cart-image">
                        <a href="{{ route('item.show', ['item'=>$detail->item]) }}">
                            <img src="../../uploads/{{ $detail->item->item_image }}" style="width:100px; height:60px;">
                        </a>
                        <p class="title">{{ $detail->item->item_name }}</p>
                    </td>
                    <td class="cart-image-price">
                        <p>¥{{ number_format($detail->total_price) }}</p>
                    </td>
                </tr>
                <?php $total_price = $total_price + $detail->total_price ?>
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