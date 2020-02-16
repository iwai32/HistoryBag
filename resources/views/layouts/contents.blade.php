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
  <link href="{{ mix('/css/contents.css') }}" rel="stylesheet">
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
  <!--header-->
  <header class="g-header">
    <div class="user-wrapper">
      <div class="user-guide">
        <div class="inner user-guide__inner">
         <p class="user-guide__to-top"><a class="user-guide__to-top__anchor" href="{{ route('top') }}">top</a></p>
          <div class="user-guide__groups">
            <ul class="user-guide__account">
              <li class="user-guide__account__link">
                <a class="user-guide__account__link__anchor" href="{{ route('user.signupPage') }}">新規登録</a>
              </li>
              <li class="user-guide__account__link">
                <a class="user-guide__account__link__anchor" href="{{ route('user.signinPage') }}">サインイン</a>
              </li>
            </ul>
            <div class="user-guide__language">
              <button class="language-btn">
                <i class="fas fa-globe"></i>
                <span>Language</span>
                <i class="fas fa-chevron-down"></i>
              </button>
              <ul class="language-nav">
                <li class="language-nav__list"><a href="#">日本語</a></li>
                <li class="language-nav__list"><a href="#">English</a></li>
                <li class="language-nav__list"><a href="#">繁體中文</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="user-contents">
        <div class="inner user-contents__inner">
          <h1 class="app-title"><a href="#">HistoryBag</a></h1>
          <div class="user-contents__nav">
            <ul class="user-contents__nav__items">
              <li class="account-nav">
                <i class="fas fa-user-circle"></i>
                <ul class="account-nav__lists">
                  <li><a href="#">プロフィール</a></li>
                  <li><a href="{{ route('user.signout') }}">サインアウト</a></li>
                </ul>
              </li>

              <li class="favorites"><a href="#"><i class="fas fa-star"></i></a></li><!--お気に入りページへ-->
            </ul>
          </div>
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

    <div class="g-searcher">
      <form action="#" method="get">
        <div class="inner g-searcher-inner">
          <!-- ページ検索 -->
          <div class="search-item g-search-page">
            <select class="g-search-page__type" name="page-type">
              <option value="ALL" selected="selected">すべて</option>
              <option value="日報">日報</option>
              <option value="スニペット">スニペット</option>
              <option value="メモ">メモ</option>
            </select>
          </div>
          <!-- 日付検索 -->
          <div class="search-item g-search-date">
            <input class="g-search-date__input" type="date" name="date">
          </div>
          <!-- キーワード検索 -->
          <div class="search-item g-search-keyword">
            <input class="g-search-keyword__input" type="search" name="keyword">
            <button class="g-search-keyword__button" type="button"><i class="fas fa-search"></i></button>
          </div>
          <!-- カテゴリ検索 -->
          <div class="search-item g-search-categories">
            <label class="g-search-categories__label">
              <input class="g-search-categories__box" type="checkbox" name="category" value="HTML">
              <span>HTML</span>
            </label>
            <label class="g-search-categories__label">
              <input class="g-search-categories__box" type="checkbox" name="category" value="CSS">
              <span>CSS</span>
            </label>
            <label class="g-search-categories__label">
              <input class="g-search-categories__box" type="checkbox" name="category" value="JavaScript">
              <span>JavaScript</span>
            </label>
            <label class="g-search-categories__label">
              <input class="g-search-categories__box" type="checkbox" name="category" value="PHP">
              <span>PHP</span>
            </label>
            <label class="g-search-categories__label">
              <input class="g-search-categories__box" type="checkbox" name="category" value="SQL">
              <span>SQL</span>
            </label>
            <label class="g-search-categories__label">
              <input class="g-search-categories__box" type="checkbox" name="category" value="AWS">
              <span>AWS</span>
            </label>
            <label class="g-search-categories__label">
              <input class="g-search-categories__box" type="checkbox" name="category" value="Linux">
              <span>Linux</span>
            </label>
            <label class="g-search-categories__label">
              <input class="g-search-categories__box" type="checkbox" name="category" value="その他">
              <span>その他</span>
            </label>
          </div>
        </div>
      </form>
    </div>
  </header>

  <!--main-->
  <main class="g-main">
    @yield('contents')
  </main>

  <!--footer-->
  <footer class="g-footer">
    <nav class="footer-nav">
      <ul>
        <li class="footer-nav__list"><a href="#">日報</a></li>
        <li class="footer-nav__list"><a href="#">スニペット</a></li>
        <li class="footer-nav__list"><a href="#">チャートグラフ</a></li>
        <li class="footer-nav__list"><a href="#">メモ</a></li>
      </ul>
    </nav>

    <div class="inner footer-inner">
      <div class="language-list-box">
        <div class="label">Language</div>
        <ul class="breadcrumb-language">
          <li class="breadcrumb-language__list"><a href="#">日本語</a></li>
          <li class="breadcrumb-language__list"><a href="#">English</a></li>
          <li class="breadcrumb-language__list"><a href="#">繁體中文</a></li>
        </ul>
      </div>
      <p class="copy-right"><small>&copy; 2020 KouheiIwai</small></p>
      
    </div>
  </footer>
</body>
</html>