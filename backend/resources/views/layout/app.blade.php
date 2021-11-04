<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSSの呼び出し --}}
    @stack('css')
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <title>IveSen</title>
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

<script type="text/javascript" src="../../js/welcome.js"></script>
</body>
@yield('content')