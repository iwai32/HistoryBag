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
  <link href="{{ mix('/css/top.css') }}" rel="stylesheet">
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
<body class="top-body">
  <div class="top-wrapper">
    <div class="top-inner">
    <div class="top-title">
      <h1 class="welcome-to-history-bag">HistoryBag<span>へようこそ</span></h1>
      <p class="history-bag-details">日々の学習を記録し、見える化します。あなたのモチベーションを応援します。</p>
    </div>

    <!--認証の種類-->
    <div class="signup-wrapper">
      <form class="normal-signup-form" action="{{ route('user.signup') }}" method="post">
        <div class="form-group">
          <label class="form-group__label" for="user_name">ユーザ名</label>
          <input class="form-group__input" id="user_name" name="name" type="text" required>
        </div>

        <div class="form-group">
          <label class="form-group__label" for="email">メールアドレス</label>
          <input class="form-group__input" id="email" name="email" type="email" required>
        </div>

        <div class="form-group">
          <label class="form-group__label" for="password">パスワード</label>
          <input class="form-group__input" id="password" name="password" type="password" required>
        </div>

        <div class="normal-signup-form__btn-area">
          <button class="btn">登録する</button>
        </div>
        @csrf
      </form>

       <span class="signup-text--or">OR</span>

      <ul class="social-signup">
        <li class="type-sns twitter">
          <a class="type-sns__link" href="{{ route('user.redirectTwitter') }}"><i class="fab fa-twitter-square twitter-icon"></i>Twitterで登録</a>
        </li>

        <li class="type-sns google">
          <a class="type-sns__link" href="{{ route('user.redirectGoogle') }}"><i class="fab fa-google google-icon"></i>googleで登録</a>
        </li>

        <li class="type-sns github">
          <a class="type-sns__link" href="{{ route('user.redirectGithub') }}"><i class="fab fa-github github-icon"></i>githubで登録</a>
        </li>
      </ul>
    </div>
    
    <p class="top-signin">既に登録済みの方はこちらで<a class="top-signin__link" href="{{ route('user.signinPage') }}">サインイン</a>してください</p>
    </div>
  </div><!--.top-wrapper-->
</body>
</html>