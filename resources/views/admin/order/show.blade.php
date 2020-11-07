@extends('layouts.admin.app')
@section('content')

<div class="order-show">
    <div class="order">
        <h2 class="header">注文詳細</h2>
        
        <div class="status">
            <form method="POST" action="{{route('admin.order.update', ['order'=>$order])}}">
            @csrf
            @method('put')
                @if($order->order_status == 1)
                    <h4>ステータス：受付前</h4>
                    <h5>({{ $order->created_at->format('Y年m月d日H時i分') }}更新)</h5>
                @elseif($order->order_status == 2)
                    <h4>ステータス：受付済み</h4>
                    <h5>（{{ $order->updated_at->format('Y年m月d日H時i分') }}更新）</h5>
                @elseif($order->order_status == 3)
                    <h4>ステータス：発送手配待ち</h4>
                    <h5>（{{ $order->updated_at->format('Y年m月d日H時i分') }}更新）</h5>
                @elseif($order->order_status == 4)
                    <h4>ステータス：発送手配済</h4>
                    <h5>（{{ $order->updated_at->format('Y年m月d日H時i分') }}更新）</h5>
                @endif
                <select name="order_status">
                    <option value="{{ $order->order_status }}">選択して下さい</option>
                    <option value="1">受付前</option>
                    <option value="2">受付済</option>
                    <option value="3">発送手配待ち</option>
                    <option value="4">発送手配済</option>
                </select>
            <input type="submit" value="更新する">
            </form>
        </div>
        <div class="day">
            <p>注文日時：{{ $order->created_at->format('Y年m月d日H時i分') }}</p>
        </div>       
        <div class="name">
            <p>連絡先：{{ Auth::user()->email }}</p>
        </div>
        <div class="pay">
            <p>支払い方法：クレジットカード</p>
        </div>
        <div class="delivery">
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
        <div class="memo">
            <p>備考</p>
            <p>{{ $order->memo }}</p>
            <input type="hidden" name="memo" value="{{ $order->memo }}" class="input">
        </div>    
    </div>
    <div class="order-item">
        <table>
            <?php $total_price = 0 ?>
            @foreach ($order->order_details as $detail)
                <tr>
                    <td class="item-image">
                        <a href="{{ route('item.show', ['item'=>$detail->item]) }}">
                            <img src="../../uploads/{{ $detail->item->item_image }}" style="width:100px; height:60px;">
                        </a>
                        <p class="title">{{ $detail->item->item_name }}</p>
                    </td>
                    <td>数量：{{ $detail->num }}</td>
                    <td class="cart-image-price">
                        <p>¥{{ number_format($detail->total_price) }}</p>
                    </td>
                </tr>
                <?php $total_price = $total_price + $detail->total_price ?>
            @endforeach
            <tr class="price">
                <td>小計</td>
                <td></td>
                <td>¥{{ number_format($total_price) }}</td>
            </tr>
            <tr class="send">
                <td>送料</td>
                <td></td>
                <td>¥800</td>
            </tr>
            <tr class="total">
                <td>合計</td>
                <td></td>
                <td>
                    <p>¥{{ number_format($total_price + 800) }}</p>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection