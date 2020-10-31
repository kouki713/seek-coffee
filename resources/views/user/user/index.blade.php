@extends('layouts.user.app')
@section('content')
<div class="content-header">
    <h1 class="title">ACCOUNT</h1>
</div>
<div class="user-index">
    <div class="info">
        <p class="name">
            {{ $user->name }}
        </p>
        <p class="email">
            {{ $user->email }}
        </p>
        <a href="{{ route('user.delivery.index') }}">登録住所（０）</a>
    </div>
    <div class="order">
        <p class="title">
            注文履歴
        </p>
        <div class="body">
            <p>注文がありません</p>
        </div>
    </div>
    
</div>
@endsection