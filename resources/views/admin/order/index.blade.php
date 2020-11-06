@extends('layouts.admin.app')
@section('content')

<div class="order-index">
    <div class="order1">
       <p>新規注文</p>
        <table>
            <tr>
                <th>日時</th>
                <th>購入者</th>
                <th>商品</th>
                <th>金額</th>
                <th>ステータス</th>
                <th></th>
            </tr>
            @foreach ($orders1 as $order)
                <tr>
                    <td>{{ $order->created_at->format('Y年m月d日') }}</td>
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
                        <p>発送手配待ち</p>
                        @elseif($order->order_status == 4)
                        <p>発送手配済み</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.order.show', ['order'=>$order]) }}">詳細</a>
                    </td>
                </tr>
            @endforeach
        
            <p>受付前</p>
            <tr>
                <th>日時</th>
                <th>購入者</th>
                <th>商品</th>
                <th>金額</th>
                <th>ステータス</th>
                <th></th>
            </tr>
            @foreach ($orders2 as $order)
                <tr>
                <td>{{ $order->created_at->format('Y年m月d日') }}</td>
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
                        <p>発送手配待ち</p>
                        @elseif($order->order_status == 4)
                        <p>発送手配済み</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.order.show', ['order'=>$order]) }}">詳細</a>
                    </td>
                </tr>
            @endforeach
        
            <p>発送手配中</p>
            <tr>
                <th>日時</th>
                <th>購入者</th>
                <th>商品</th>
                <th>金額</th>
                <th>ステータス</th>
                <th></th>
            </tr>
            @foreach ($orders3 as $order)
                <tr>
                <td>{{ $order->created_at->format('Y年m月d日') }}</td>
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
                        <p>発送手配待ち</p>
                        @elseif($order->order_status == 4)
                        <p>発送手配済み</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.order.show', ['order'=>$order]) }}">詳細</a>
                    </td>
                </tr>
            @endforeach
        
            <p>発送済み</p>
            <tr>
                <th>日時</th>
                <th>購入者</th>
                <th>商品</th>
                <th>金額</th>
                <th>ステータス</th>
                <th></th>
            </tr>
            @foreach ($orders4 as $order)
                <tr>
                <td>{{ $order->created_at->format('Y年m月d日') }}</td>
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
                        <p>発送手配待ち</p>
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