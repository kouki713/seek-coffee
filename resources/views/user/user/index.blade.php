@extends('layouts.user.app')
@section('content')
<div class="content-header user-ind">
    <h1 class="title">ACCOUNT</h1>
    <a href="{{ route('user.logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <p>ログアウト<span>→</span></p>
    </a>
    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>  
</div>
<div class="user-index">
    <div class="info">
        <p class="name">
            {{ $user->name }}
        </p>
        <p class="email">
            <a href="mailto:{{ $user->email }}">
                {{ $user->email }}
            </a>    
        </p>
        <a href="{{ route('user.delivery.index') }}">登録住所（{{ $user->deliverys->count() }}）</a>
    </div>
    <div class="user-order">
        <p class="title">
            注文履歴
        </p>
        <div class="body">
            @if ($orders->isEmpty())
            <p>注文がありません</p>
            @else
                <table>
                    <tr>
                        <th>日時</th>
                        <th>商品</th>
                        <th>金額</th>
                        <th></th>
                    </tr>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->created_at->format('Y年m月d日') }}</td>
                            <td>
                                <?php $total_price = 0 ?>
                                @foreach ($order->order_details as $detail)
                                    <p>{{ $detail->item->item_name }}</p>
                                    <?php $total_price = $total_price + $detail->total_price ?>
                                @endforeach
                            </td>
                            <td>¥{{ number_format($total_price + 800) }}</td>
                            <td><a href="{{ route('user.order.show', ['order'=>$order]) }}">詳細</a></td>
                        </tr>
                        
                    @endforeach
                </table>
            @endif
        </div>
    </div>
    
</div>
@endsection