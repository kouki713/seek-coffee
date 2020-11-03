@extends('layouts.admin.app')
@section('content')

<div class="receipt-show">
    <div class="recipt-new">
        <form method="POST" action="{{route('admin.receipt.store')}}">
            @csrf
            <p>{{ $item->item_name }}</p>
            <input type="number" name="num">
            <input type="hidden" name="item_id" value="{{ $item->id }}">
            <div class="receipt-btn">
                <input type="submit" value="送信する">
            </div>
            
        </form>
    </div>
    <div class="receipt-index">
        
    </div>
</div>

@endsection