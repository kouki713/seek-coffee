@extends('layouts.user.app')
@section('content')

<div class="content-header">
    <h1 class="title">CARTS</h1>
</div>
<div class="cart">

    <table>
        <tr>
            <th>
                <p>商品名</p>
            </th>
            <th>
                <p>価格</p>
            </th>
            <th>
                <p>数量</p>
            </th>
            <th>
                <p>合計</p>
            </th>
            <th></th>
        </tr>
        <?php $total = 0 ?>
        @foreach ($carts as $cart)
            <tr>
                <td class="title">
                    <img src="../../uploads/{{ $cart->item->item_image }}" style="width:150px; height:90px;">
                    <a href="{{ route('item.show', ['item' => $cart->item]) }}">
                        {{ $cart->item->item_name }}
                    </a>
                </td>
                <td>
                    ¥{{ number_format($cart->item->price) }}
                </td>
                <td>
                    <form method="POST" action="{{route('user.cart.update', ['cart' => $cart])}}">
                        @csrf
                        @method('put')
                        <select name="num">
                            <option value="{{ $cart->num }}">{{ $cart->num }}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input type="submit" value="再計算" class="cart-update">
                    </form>
                    
                </td>   
                <td>
                    <?php $total_price = $cart->item->price * $cart->num ?>
                    ¥{{ number_format($total_price) }}
                    <?php $total = $total + $total_price ?>
                </td>
                <td>
                    <form method="POST" action="{{route('user.cart.destroy', ['cart' => $cart ]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="削除">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="body">
        <h2>
            <span>合計：</span>
            <?php $total = $total + 800 ?>
            ¥{{ number_format($total) }}
        </h2>
        <p>送料800円込</p>
        <div class="btn">
            <a href="{{ route('item.index') }}">買い物を続ける</a>
            <a href="{{ route('user.order.create') }}">注文画面へ進む</a>
        </div>
    </div>
</div>

    



@endsection
