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