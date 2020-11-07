@extends('layouts.admin.app')
@section('content')

<div class="order-index">
    <div class="order1">
       <p class="title">新規注文</p>
        <table>
            <tr>
                <th class="day">注文日時</th>
                <th class="buy">購入者</th>
                <th class="item">商品</th>
                <th class="price">金額</th>
                <th class="status">ステータス</th>
                <th class="show"></th>
            </tr>
            @foreach ($orders1 as $order)
                <tr>
                    <td>{{ $order->created_at->format('Y年m月d日H時i分') }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>
                        <?php $total_price = 0 ?>
                        @foreach ($order->order_details as $detail)
                            <p>{{ $detail->item->item_name }}</p>
                            <?php $total_price = $total_price + $detail->total_price ?>
                        @endforeach
                    </td>
                    <td>¥{{ number_format($total_price + 800) }}</td>
                    <td>
                        @if($order->order_status == 1)
                        <p>受付前</p>
                        @elseif($order->order_status == 2)
                        <p>受付済み</p>
                        @elseif($order->order_status == 3)
                        <p>発送準備中</p>
                        @elseif($order->order_status == 4)
                        <p>発送手配済み</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.order.show', ['order'=>$order]) }}">詳細</a>
                    </td>
                </tr>
            @endforeach
        </table> 
    </div>
    <div class="order2">
        <p class="title">受付済み</p>
        <table>
            <tr>
                <th class="day">受付日時</th>
                <th class="buy">購入者</th>
                <th class="item">商品</th>
                <th class="price">金額</th>
                <th class="status">ステータス</th>
                <th class="show"></th>
            </tr>
            @foreach ($orders2 as $order)
                <tr>
                <td>{{ $order->updated_at->format('Y年m月d日H時i分') }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>
                        <?php $total_price = 0 ?>
                        @foreach ($order->order_details as $detail)
                            <p>{{ $detail->item->item_name }}</p>
                            <?php $total_price = $total_price + $detail->total_price ?>
                        @endforeach
                    </td>
                    <td>¥{{ number_format($total_price + 800) }}</td>
                    <td>
                        @if($order->order_status == 1)
                        <p>受付前</p>
                        @elseif($order->order_status == 2)
                        <p>受付済み</p>
                        @elseif($order->order_status == 3)
                        <p>発送準備中</p>
                        @elseif($order->order_status == 4)
                        <p>発送手配済み</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.order.show', ['order'=>$order]) }}">詳細</a>
                    </td>
                </tr>
            @endforeach
        </table> 
    </div>
    <div class="order3">
        <p class="title">発送準備中</p>
        <table>
            <tr>
                <th class="day">発送準備日時</th>
                <th class="buy">購入者</th>
                <th class="item">商品</th>
                <th class="price">金額</th>
                <th class="status">ステータス</th>
                <th class="show"></th>
            </tr>
            @foreach ($orders3 as $order)
                <tr>
                <td>{{ $order->updated_at->format('Y年m月d日H時i分') }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>
                        <?php $total_price = 0 ?>
                        @foreach ($order->order_details as $detail)
                            <p>{{ $detail->item->item_name }}</p>
                            <?php $total_price = $total_price + $detail->total_price ?>
                        @endforeach
                    </td>
                    <td>¥{{ number_format($total_price + 800) }}</td>
                    <td>
                        @if($order->order_status == 1)
                        <p>受付前</p>
                        @elseif($order->order_status == 2)
                        <p>受付済み</p>
                        @elseif($order->order_status == 3)
                        <p>発送準備中</p>
                        @elseif($order->order_status == 4)
                        <p>発送手配済み</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.order.show', ['order'=>$order]) }}">詳細</a>
                    </td>
                </tr>
            @endforeach
        </table> 
    </div>
    <div class="order4">
        <p class="title">発送済み</p>
        <table>
            <tr>
                <th class="day">発送日時</th>
                <th class="buy">購入者</th>
                <th class="item">商品</th>
                <th class="price">金額</th>
                <th class="status">ステータス</th>
                <th class="show"></th>
            </tr>
            @foreach ($orders4 as $order)
                <tr>
                <td>{{ $order->updated_at->format('Y年m月d日H時i分') }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>
                        <?php $total_price = 0 ?>
                        @foreach ($order->order_details as $detail)
                            <p>{{ $detail->item->item_name }}</p>
                            <?php $total_price = $total_price + $detail->total_price ?>
                        @endforeach
                    </td>
                    <td>¥{{ number_format($total_price + 800) }}</td>
                    <td>
                        @if($order->order_status == 1)
                        <p>受付前</p>
                        @elseif($order->order_status == 2)
                        <p>受付済み</p>
                        @elseif($order->order_status == 3)
                        <p>発送準備中</p>
                        @elseif($order->order_status == 4)
                        <p>発送手配済み</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.order.show', ['order'=>$order]) }}">詳細</a>
                    </td>
                </tr>
            @endforeach
        </table> 
    </div>
    
</div>
@endsection