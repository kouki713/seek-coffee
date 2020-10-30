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
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="admin-header">
        <div class="admin-logo">
            <p>C</p>
        </div>
        <nav class="admin-nav">          
            <a href="{{ route('home.index') }}">HOME</a>               
            <a href="{{ route('home.store_about') }}">ORDER</a>             
            <a href="{{ route('item.index') }}">ITEM</a>      
            <a href="{{ route('answer.index') }}">FAQ</a>
            <a href="{{ route('contact.create') }}">CONTACT</a>
        </nav>
    </header>    
    <main>
        @yield('content')
    </main>
</body>
</html>
