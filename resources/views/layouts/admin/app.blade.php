<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/top.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/item.css') }}" rel="stylesheet">
</head>
<body>
    <header class="admin-header">
        <div class="admin-logo">
            <p>C</p>
        </div>
        <nav class="admin-nav">
            <a href="{{ route('admin.home.index') }}">SEEK COFFEE </a>     
        </nav>
        <div class="logout-nav">
            @guest
            @else
                <a href="{{ route('admin.logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <p>LOGOUT<span>→</span></p>
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>  
            @endguest 
        </div>
       
    </header>   
     
    <main>
        <div class="sidebar">
            <div class="sidebar-nav">
                <div class="nav-content">
                    <i class="fas fa-home"></i>
                    <a href="{{ route('admin.home.index') }}">ホーム</a>
                    <span>></span>
                </div>
                <div class="nav-content">
                    <i class="fas fa-tags"></i>
                    <a href="{{ route('admin.item.index') }}">商品一覧</a>
                    <span>></span>
                </div>
                <div class="nav-content">
                    <i class="far fa-plus-square"></i>
                    <a href="{{ route('admin.item.create') }}">商品登録</a>
                    <span>></span>
                </div>
                <div class="nav-content">
                    <i class="fas fa-shopping-cart"></i>
                    <a href="{{ route('admin.order.index') }}">注文履歴</a>
                    <span>></span>
                </div>
                <div class="nav-content">
                    <i class="far fa-address-card"></i>
                    <a href="{{ route('admin.contact.index') }}">お問い合わせ</a>
                    <span>></span>
                </div>
                <div class="nav-content">
                    <i class="far fa-question-circle"></i>
                    <a href="{{ route('admin.answer.index') }}">FAQ管理</a>
                    <span>></span>
                </div>
                <div class="nav-content">
                    <i class="fas fa-users"></i>
                    <a href="#">会員管理</a>
                    <span>></span>
                </div>
                <div class="nav-content">
                    <i class="fas fa-highlighter"></i>
                    <a href="{{ route('admin.receipt.index') }}">商品入庫</a>
                    <span>></span>
                </div>
            </div>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </main>
</body>
</html>
