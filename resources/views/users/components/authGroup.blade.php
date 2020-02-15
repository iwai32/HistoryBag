<!--usersPageInner内に埋め込む-->
<ul class="auth-group {{ $layoutEachPage }}">
  <li class="auth-group__item">
    <form class="auth-form" action="{{ $destinationUrl }}" method="post">
      <!--新規登録の場合に表示する-->
      @if (parse_url(route('user.signupPage'), PHP_URL_PATH) === '/'.Request::path())
      <div class="form-group">
        <input class="form-group__input" id="name" name="name" type="text" placeholder="ユーザー名" required>
      </div>
      @endif

      <div class="form-group">
        <input class="form-group__input" id="email" name="email" type="email" placeholder="メールアドレス" required>
      </div>
      <div class="form-group">
        <input class="form-group__input" id="password" name="password" type="password" placeholder="パスワード" required>
      </div>

      <div class="auth-form__btn-area">
        <button class="btn">{{ $authBtnMessage }}</button>
      </div>
      @csrf
    </form>
  </li>

  <li class="auth-group__item">
    <ul class="social-lists">
      <li class="social-lists__item twitter">
        <a href="#" class="social-lists__link"><i class="fab fa-twitter-square twitter-icon"></i>twitterで{{ $snsAuthMessage }}</a>
      </li>

      <li class="social-lists__item google">
        <a href="#" class="social-lists__link"><i class="fab fa-google google-icon"></i>googleで{{ $snsAuthMessage }}</a>
      </li>

      <li class="social-lists__item github">
        <a href="#" class="social-lists__link"><i class="fab fa-github github-icon"></i>githubで{{ $snsAuthMessage }}</a>
      </li>
    </ul>
  </li>
</ul>