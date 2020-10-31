@extends('layouts.user.app')
@section('content')

<div class="content-header">
    <div class="header-nav">
        <a href="#">HOME</a>
        <span>/</span>
        <p>ITEM</p>
    </div>
    <h1 class="title">ITEM</h1>
</div>

<div class="items">
    <div class="item-contents clearfix">
        @foreach ($items as $item)
        <div class="content">
            <a href="#">
                <div class="image">
                    <img src="../../uploads/{{ $item->item_image }}">
                </div>
            </a>
            <div class="title">{{ $item->item_name }}</div>
            <div class="price">¥{{ number_format($item->price) }}</div>
        </div>
        @endforeach
    </div>
</div>


@endsection