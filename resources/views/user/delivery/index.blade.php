@extends('layouts.user.app')
@section('content')
<div class="content-header">
    <h1 class="title">ADDRESS</h1>
</div>
<div class="deli-index">
    @foreach ($deliverys as $delivery)
        <div class="add-name">
            {{ $delivery->address_name }}
        </div>
        <p>〒 {{ $delivery->postal_code }}</p>
        <p>{{ $delivery->address }}</p>
        <p>TEL {{ $delivery->phone_number }}</p>
        <div class="deli-info">
            <a href="{{ route('user.delivery.edit', ['delivery' => $delivery]) }}">編集</a>
            <form method="POST" action="{{route('user.delivery.destroy', ['delivery' => $delivery ]) }}">
                @csrf
                @method('delete')
                <input type="submit" value="削除">
            </form>
        </div>
    @endforeach
    <div class="new-btn">
        <a href="#">新しい住所を追加</a>
    </div>
</div>
<div class="deli-form">
    <form method="POST" action="{{route('user.delivery.store')}}">
        @csrf
        <p>名前</p>
        <input type="text" name="address_name" class="input">
        <p>郵便番号</p>
        <input type="text" name="postal_code" class="input">
        <p>住所</p>
        <input type="text" name="address" class="input">
        <p>電話番号</p>
        <input type="text" name="phone_number" class="input">
        <div class="deli-btn">
            <input type="submit" class="btn" value="送信する">
        </div>
    </form>
</div>

@endsection