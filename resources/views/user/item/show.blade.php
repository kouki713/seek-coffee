@extends('layouts.user.app')
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
            <a href="#">送料はこちら</a>
        </div>
        <form class="show-form">
            <button>カートへ入れて、注文へ</button>
            <div class="num-form">
                <p>数量選択</p>
                <select name="num">
                    <option value="">選択して下さい</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <p>個</p>
            </div>
        </form>
        <div class="show-body">
            <div class="text">
                <p>※お一人様５個までとなります。</p>
                {!! nl2br(e($item->item_body)) !!}
        </div>
    </div>
</div>

@endsection