@extends('layouts.user.app')
@section('content')

<div class="content-header">
    <div class="header-nav">
        <a href="#">HOME</a>
        <span>/</span>
        <p>CONTACT</p>
    </div>
    <h1 class="title">CONTACT</h1>
</div>
<div class="contact">
    <h3>ご質問やご要望などございましたら、お気軽にお問い合わせください。</h3>
    <form method="POST" action="{{route('contact.store')}}">
        @csrf
        <p>名前</p>
        <input type="text" name="name" class="input">
        <p>メールアドレス</p>
        <input type="text" name="email" class="input">
        <p>件名</p>
        <input type="text" name="title" class="input">
        <p>内容</p>
        <textarea type="text" name="body" class="input" rows="6"></textarea>
        <div class="contact-btn">
            <input type="submit" class="btn" value="送信する">
        </div>
    </form>
</div>

@endsection
    