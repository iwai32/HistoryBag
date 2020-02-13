@extends('layouts.users')

@section('contents')
<!--ここでログインと新規登録を使い分ける-->
<div class="signin-wrapper">
  <h2 class="signin-title">サインイン</h2>

  <div class="signin-inner">
    <ul class="signin-group">
      <li class="signin-group__item">
        <form class="signin-form" action="" method="post">
          <div class="form-group">
            <input class="form-group__input" id="email" name="email" type="email" placeholder="メールアドレス">
          </div>
          <div class="form-group">
            <input class="form-group__input" id="password" name="password" type="password" placeholder="パスワード">
          </div>

          <div class="signin-form__btn-area">
            <button class="btn">サインイン</button>
          </div>
        </form>
      </li>

      <li class="signin-group__item">
        <ul class="social-lists">
          <li class="social-lists__item twitter">
            <a href="#" class="social-lists__link"><i class="fab fa-twitter-square twitter-icon"></i>twitterでサインイン</a>
          </li>

          <li class="social-lists__item google">
            <a href="#" class="social-lists__link"><i class="fab fa-google google-icon"></i>googleでサインイン</a>
          </li>

          <li class="social-lists__item github">
            <a href="#" class="social-lists__link"><i class="fab fa-github github-icon"></i>githubでサインイン</a>
          </li>
        </ul>
      </li>
    </ul>
    <p class="signin-to-signup">アカウントを持ってない場合は<a href="#">新規登録</a>へ</p>
  </div>
</div>
@endsection