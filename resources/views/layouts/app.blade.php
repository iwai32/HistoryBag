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
    <div class="user-wrapper">
      <div class="user-guide">
        <p class="user-guide__to-top"><a class="user-guide__to-top__anchor" href="#">top</a></p>
        <div class="user-guide__groups">
          <ul class="user-guide__account">
            <li class="user-guide__account__link">
              <a class="user-guide__account__link__anchor" href="#">新規登録</a>
            </li>
            <li class="user-guide__account__link">
              <a class="user-guide__account__link__anchor" href="#">ログイン</a>
            </li>
          </ul>
          <button class="user-guide__language">Language</button>
        </div>
      </div>

      <div class="user-contents">
        <h1 class="app-title">HistoryBag</h1>
        <div class="user-contents__nav">
          <ul class="user-contents__nav__items">
            <li class="account-nav"><i class="fas fa-user-circle"></i></li>
            <li class="favorites"><i class="fas fa-star"></i></li>
            <li class="logout">ログアウト</li>
          </ul>
        </div>
      </div>
    </div>

    <nav class="g-nav">
      <ul>
        <li class="g-nav__list current"><a href="#">日報</a></li>
        <li class="g-nav__list"><a href="#">スニペット</a></li>
        <li class="g-nav__list"><a href="#">チャートグラフ</a></li>
        <li class="g-nav__list"><a href="#">メモ</a></li>
      </ul>
    </nav>

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