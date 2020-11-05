@extends('layouts.user.app')
@section('content')

<div class="content-header">
    <div class="header-nav">
        <p>カート</p>
        <span><i class="fas fa-chevron-right"></i></span>
        <h4 class="order-status">購入情報入力</h4>
        <span><i class="fas fa-chevron-right"></i></span>
        <p>確認画面</p>
        <span><i class="fas fa-chevron-right"></i></span>
        <p>完了</p>
    </div>
</div>
<div class="order">
    <div class="order-create">
        <form method="POST" action="{{route('user.order.confirm')}}">
            @csrf
            <p class="order-title">配送先を選択して下さい</p>
            @foreach ($deliverys as $delivery)
                <div class="deliverys">
                    <p>
                        <input type="radio" name="deli" value="{{ $delivery->id }}" style="appearance: radio;">
                        {{ $delivery->address_name }}
                    </p>
                    <p>〒{{ $delivery->postal_code }} {{ $delivery->address }}</p>
                    <p>TEL:{{ $delivery->phone_number }}</p>
                </div>
            @endforeach
            <div class="new-delivery">
                <input type="radio" name="deli" value="new" style="appearance: radio;">新しい住所
                <p>名前</p>
                <input type="text" name="address_name" class="input">
                <p>郵便番号</p>
                <input type="text" name="postal_code" class="input">
                <p>住所</p>
                <input type="text" name="address" class="input">
                <p>電話番号</p>
                <input type="text" name="phone_number" class="input">
            </div>
            <div class="order-memo">
                <p>備考(なしの場合は『なし』と記載して下さい)</p>
                <textarea type="text" name="memo" class="input" rows="4"></textarea>
            </div>
            
            <div class="confirm-btn">
                <input type="submit" value="確認画面へ進む">
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