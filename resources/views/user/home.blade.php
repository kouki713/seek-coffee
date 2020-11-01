@extends('layouts.user.app')
@section('content')
<div class="main-image">
    <div class="background"></div>
</div>
<div class="main-text">
    <div class="title">
        ささやかな一杯で、幸せな一生に
    </div>
    <div class="body">
    We make every cup of coffee with love and 
    make your heart warm. <br>
    seek coffee is the place where you can 
    share a coffee time with your loved ones.
    </div>
</div>
<div class="top-items">
    <div class="item-contents clearfix">
        @foreach ($items as $item)
            <div class="content">
                <div class="image">
                    <img src="../../uploads/{{ $item->item_image }}">
                </div>
                <div class="title">{{ $item->item_name }}</div>
                <div class="price">¥{{ number_format($item->price) }}</div>
            </div>
        @endforeach
    </div>
</div>
@endsection

