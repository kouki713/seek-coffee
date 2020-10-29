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
</head>
<body>
    <header class="store-header">
        <div class="store-logo">
            <p>C</p>
        </div>
        <nav class="store-nav">
            
                    <a href="#">HOME</a>
                
                    <a href="#">ABOUT</a>
                
                    <a href="#">ITEM</a>
                
                    <a href="#">FAQ</a>
                
        </nav>
        <div class="store-icon">
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="#"><i class="far fa-user"></i></a>
            <input type="checkbox" id="drawer-check" class="drawer-hidden" >
            <label for="drawer-check" class="drawer-open">
                <i class="fas fa-shopping-cart"></i>
            </label>
            <label for="drawer-check" class="drawer-close"></label>
            <nav class="drawer-content">
                <div class="content">
                <div class="title">
                    <p>ショッピングカート</p>
                    <i class="fas fa-times"></i>
                </div>
                <div class="body">
                    <p>カートは現在空です。</p>
                </div>
</div>
            </div>
        </div>
        
    </header> 

    <main class="py-4">
        @yield('content')
    </main>
    <footer>
        <div class="content">
            <div class="footer-content border1">
                <div class="title">
                    OFFICIAL WEB SITE
                </div>
                <div class="body">
                    <a href="{{ route('home.top') }}">COFFEE STAND</a>
                    
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
                ©2020, COFFEE STAND
            </div>
        </div>
    </footer>
</body>
</html>
