<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }}の@yield('authTitle')ページ</title>
  <!--csrf-->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--styles-->
  <link href="{{ mix('/css/users.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bitter|Kreon&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- OGP -->
  <meta property="og:url" content="url"/>
  <meta property="og:title" content="HistoryBag"/>
  <meta property="og:type" content="website">
  <meta property="og:description" content="HistoryBag"/>
  <meta property="og:image" content=""/>
  <!-- ファビコン -->
  <link rel="shortcut icon" href="">
</head>
<body class="common-body">
  <div class="auth-page">
    <h1 class="auth-page__title">HistoryBag</h1>
    <div class="auth-container">
      <div class="users-page-wrapper">
        @yield('userPageContents')
        <div class="users-page-inner">
        @yield('usersPageInner')
        </div>
      </div>
    </div>
    <a href="/" class="auth-to-top">topへもどる</a>
  </div>
</body>
</html>