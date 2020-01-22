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
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
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
<body>
  <!--header-->
  <header class="g-header">

    <div class="g-nav g-nav--sub">
      <p class="g-nav--sub__to-top"><a class="g-nav--sub__to-top__anchor" href="#">top</a></p>
      <div class="g-nav--sub__groups">
        <ul class="g-nav--sub__account">
          <li class="g-nav--sub__account__link">
            <a class="g-nav--sub__account__link__anchor" href="#">新規登録</a>
          </li>
          <li class="g-nav--sub__account__link">
            <a class="g-nav--sub__account__link__anchor" href="#">ログイン</a>
          </li>
        </ul>
        <button class="g-nav--sub__language">Language</button>
      </div>
    </div>

    <div class="inner g-header-inner">
      <h1 class="app-title">HistoryBag</h1>
      <div class="g-nav g-nav--main">
        <ul class="g-nav--main__items">
          <li class="account-nav"><i class="far fa-user-circle"></i></li>
          <li class="favorites">お気に入り</li>
          <li class="logout">ログアウト</li>
        </ul>
      </div>
    </div>

  </header>

  <!--main-->
  <main>
  @yield('contents')
  </main>

  <!--footer-->
  <footer class="g-footer">

  </footer>
</body>
</html>