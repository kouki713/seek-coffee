@extends('layouts.admin.app')
@section('content')
<div class="item-show">
    <div class="item-image">
        <div class="image">
            <img src="../../uploads/{{ $item->item_image }}">
        </div>

    </div>
    <div class="item-content">
        <div class="header">
            <h1 class="title">
                {{ $item -> item_name }}
            </h1>
            <p class="price">
                ¥{{ number_format($item->price) }}
                <span>税込</span>
            </p>
            <p><span>在庫：</span>{{ $item->num }}
                <a href="{{ route('admin.receipt.show', ['item' => $item]) }}">入庫情報入力へ</a>
            </p>
        </div>
        <div class="button">
            <a href="{{ route('admin.item.edit', ['item' => $item]) }}" class="button">編集する</a>
        </div>
        <div class="button2">
            
            @if ($item->item_status == 1)
                <div class="status" style="background-color:tomato;">
                    <p style="background-color:tomato;">販売停止中</p>
                </div>
            @elseif ($item->item_status == 2)
                <div class="status">
                    <p>販売中</p>
                </div>   
            @endif
            <form method="POST" action="{{route('admin.item.status_update', ['item' => $item ]) }}">
                @csrf
                <input type="submit" value="ステータスを変更する">
            </form>
        </div>
        <div class="show-body">
            <div class="text">
                <p>※お一人様５個までとなります。</p>
                {!! nl2br(e($item->item_body)) !!}
            </div>
        </div>
    </div>
</div>


@endsection