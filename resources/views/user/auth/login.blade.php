@extends('layouts.user.app')

@section('content')

<div class="content-header">
    <h1 class="title">ログイン</h1>
</div>
<div class="login-form">

    <form method="POST" action="{{ route('user.login') }}">
        @csrf
        <p>メールアドレス</p>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <p>パスワード</p>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="form-btn">
            <button type="submit" class="btn btn-primary">
                {{ __('送信する') }}
            </button> 
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('次回から入力を省略') }}
            </label>
        </div>   
    </form>
    <div class="login-form-up">
        <p>新規会員登録はこちら <a href="{{ route('user.register') }}">新規登録</a></p>
    </div>
</div>


                    

@endsection