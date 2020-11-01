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
    <link href="{{ asset('css/user/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/top.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/item.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/user.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/delivery.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/answer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/contact.css') }}" rel="stylesheet">
</head>
<body>
    <header class="store-header">
        <div class="store-logo">
            <p>C</p>
        </div>
        <nav class="store-nav">          
            <a href="{{ route('home.index') }}">HOME</a>               
            <a href="{{ route('home.store_about') }}">ABOUT</a>             
            <a href="{{ route('item.index') }}">ITEM</a>      
            <a href="{{ route('answer.index') }}">FAQ</a>
            <a href="{{ route('contact.create') }}">CONTACT</a>
        </nav>
        <div class="store-icon">
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="{{ route('user.user.index') }}"><i class="far fa-user"></i></a>
            <input type="checkbox" id="drawer-check" class="drawer-hidden" >
            <label for="drawer-check" class="drawer-open">
                <i class="fas fa-shopping-cart"></i>
            </label>
            <label for="drawer-check" class="drawer-close"></label>
            <nav class="drawer-content">
                <div class="content">
                    <div class="title">
                        <p>ショッピングカート</p>
                        <input type="checkbox" id="icon-check" class="drawer-hidden" >
                        <label for="drawer-check" class="close-icon">
                            <i class="fas fa-times"></i>
                        </label>
                    </div>
                    <div class="body">
                        <p>カートは現在空です。</p>
                    </div>
                </div>
            </nav>
        </div>
    </header> 

    <main>
        @yield('content')
    </main>
    <footer>
        <div class="content">
            <div class="footer-content border1">
                <div class="title">
                    OFFICIAL WEB SITE
                </div>
                <div class="body">
                    <a href="{{ route('home.top') }}">SEEK COFFEE</a>
                    
                </div>
            </div>
            <div class="footer-content border2">
                <div class="title">
                    FOLLOW US OUT THERE
                </div>
                <div class="body">
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>

            </div>
        </div>
        <div class="sub-footer">
            <div class="title">
                <a href="#">配送について</a>
                <a href="#">プライバシーポリシー</a>
                <a href="#">利用規約</a>
                <a href="#">特定商取引法に基づく表記</a>
            </div>
            <div class="body">
                ©2020, SEEK COFFEE
            </div>
        </div>
    </footer>
</body>
</html>
