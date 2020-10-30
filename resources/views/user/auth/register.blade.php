@extends('layouts.user.app')

@section('content')

<div class="content-header">
    <h1 class="title">会員登録</h1>
</div>
<div class="login-form">
    <form method="POST" action="{{ route('user.register') }}">
        @csrf
        <p>名前</p>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <p>メールアドレス</p>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <p>パスワード</p>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <p>パスワード（再入力）</p>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        <div class="form-btn">
            <button type="submit" class="btn btn-primary">
                {{ __('送信する') }}
            </button>
        </div>
   </form>
</div>
@endsection