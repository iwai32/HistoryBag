@extends('layouts.users')
@section('authTitle', 'signup')
@section('userPageContents')
  @component('users.components.pageTitle')
    @slot('pageTitle')
    新規登録
    @endslot
  @endcomponent

  @section('usersPageInner')
    @component('users.components.authGroup')
      @slot('layoutEachPage')<!--ページごとにレイアウトを切り替える-->
      signup-group
      @endslot

      @slot('destinationUrl')
      {{ route('user.signup') }}
      @endslot

      @slot('authBtnMessage')
      新規登録
      @endslot

      @slot('snsAuthMessage')
      登録
      @endslot
    @endcomponent

    @component('users.components.toSigninOrSignup')
      @slot('messageToLink')
      HistoryBagに登録済みの方は<a href="{{ route('user.signinPage') }}">サインイン</a>へ
      @endslot
    @endcomponent
  @endsection<!--usersPageInner-->
@endsection<!--userPageContents-->