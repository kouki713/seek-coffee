
@extends('layouts.user.app')
@section('content')
<div class="content-header">
    <div class="header-nav">
        <p>カート</p>
        <span><i class="fas fa-chevron-right"></i></span>
        <p>購入情報入力</p>
        <span><i class="fas fa-chevron-right"></i></span>
        <p>確認画面</p>
        <span><i class="fas fa-chevron-right"></i></span>
        <h4 class="order-status">完了</h4>
    </div>
</div>
<div class="finish">
    <p>ご購入ありがとうございます。</p>
    <a href="{{ route('home.index') }}">トップページへ</a>
</div>
@endsection