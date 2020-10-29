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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/top/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/top/top.css') }}" rel="stylesheet">
    <link href="{{ asset('css/top/hamburger.css') }}" rel="stylesheet">
    
</head>
<body>
    <header>
        <div class="header-logo">
            <p>C</p>
        </div>
        <input type="checkbox" id="hamburger">
        <label for="hamburger">
            <span class="burger">
                <span class="bar"></span>
            </span>
        </label>
        <label class="light-dark" for="hamburger"></label>
        <div id="menu">
            <a href="#top">HOME</a>
            <a href="#menber">GREETING</a>
            <a href="#menu1">MENU</a>
            <a href="#store">ONLINE STORE</a>
            <a href="#shop">SHOP</a>
            <a href="{{ route('home.about') }}">ABOUT</a>
            <a href="{{ route('admin.login') }}">AMINISTRATOR</a>
        </div>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>

    </footer>

    </div>
</body>
</html>
