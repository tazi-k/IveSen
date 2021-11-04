<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- パッケージ関連 --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- 以下、自己記載 --}}
    {{-- CSSの呼び出し --}}
    @stack('css')
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
    <section class="first" id="first">
        <header id="header">
            <div class="title">
                <p class="title-name">イベ戦</p>
            </div>
            <div class="menu-btn">
                <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
            </div>
            <div class="menu">
                <a href="{{ route('register') }}" class="menu-item">新規登録</a>
                <a href="{{ route('login') }}" class="menu-item">ログイン</a>
                <a href="{{ route('users.index') }}" class="menu-item">募集一覧</a>
            </div>
        </header>
      </section>
</body>
@yield('content')
</html>
