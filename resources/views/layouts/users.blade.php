<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }}</title>
  <!--csrf-->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--scripts-->
  <script src="{{ mix('/js/app.js') }}" defer></script>
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
      @yield('contents')
    </div>
    <a href="/" class="auth-to-top">topへもどる</a>
  </div>
</body>
</html>