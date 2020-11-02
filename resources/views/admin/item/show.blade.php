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
            <a href="#">送料について</a>
        </div>
        <div class="button">
            <a href="{{ route('admin.item.edit', ['item' => $item]) }}" class="button">編集する</a>
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