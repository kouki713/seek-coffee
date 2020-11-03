@extends('layouts.user.app')
@section('content')

<div class="order">
    <div class="order-create">
        <form method="POST" action="{{route('user.order.confirm')}}">
            @csrf
            <p>配送先</p>
            
        
            @foreach ($deliverys as $delivery)
                <input type="radio" name="deli" value="{{ $delivery->id }}" style="appearance: radio;">
                <p>{{ $delivery->address_name }}</p>
                <p>〒{{ $delivery->postal_code }} {{ $delivery->address }}</p>
                <p>TEL:{{ $delivery->phone_number }}</p>
            @endforeach
            <input type="radio" name="deli" value="new" style="appearance: radio;">新しい住所
            <p>名前</p>
            <input type="text" name="address_name" class="input">
            <p>郵便番号</p>
            <input type="text" name="postal_code" class="input">
            <p>住所</p>
            <input type="text" name="address" class="input">
            <p>電話番号</p>
            <input type="text" name="phone_number" class="input">
            <p>備考</p>
            <input type="text" name="memo" class="input">
            <input type="submit" value="確認画面へ">
        </form>
        <div class="pay">
            <p>支払い</p>
            <input type="text" name="address_name" class="input" placeholder="カード番号">
            <input type="text" name="address_name" class="input" placeholder="カード名義">
            <input type="text" name="address_name" class="input" placeholder="有効期限(月/年)">
            <input type="text" name="address_name" class="input" placeholder="セキュリティーコード">
        </div>
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