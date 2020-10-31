@extends('layouts.user.app')
@section('content')
<div class="content-header">
    <h1 class="title">ADDRESS EDIT</h1>
</div>
<div class="deli-form">
    <form method="POST" action="{{route('user.delivery.update', ['delivery' => $delivery])}}">
        @csrf
        @method('put')
        <p>名前</p>
        <input type="text" name="address_name" class="input" value="{{ $delivery->address_name }}">
        <p>郵便番号</p>
        <input type="text" name="postal_code" class="input" value="{{ $delivery->postal_code }}">
        <p>住所</p>
        <input type="text" name="address" class="input" value="{{ $delivery->address }}">
        <p>電話番号</p>
        <input type="text" name="phone_number" class="input" value="{{ $delivery->phone_number }}">
        <div class="deli-btn">
            <input type="submit" class="btn" value="送信する">
        </div>
    </form>
</div>

@endsection