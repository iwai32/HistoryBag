@extends('layouts.users')
@section('authTitle', 'signin')
@section('userPageContents')
  @component('users.components.pageTitle')
    @slot('pageTitle')
    サインイン
    @endslot
  @endcomponent

  @section('usersPageInner')

  <!--ページごとにレイアウトを切り替える-->
    @component('users.components.authGroup')
      @slot('layoutEachPage')
      signin-group
      @endslot

      @slot('destinationUrl')
      {{ route('user.signin') }}
      @endslot

      @slot('authBtnMessage')
      サインイン
      @endslot

      @slot('snsAuthMessage')
      サインイン
      @endslot
    @endcomponent

    @component('users.components.toSigninOrSignup')
      @slot('messageToLink')
      アカウントを持ってない場合は<a href="{{ route('user.signupPage') }}">新規登録</a>へ
      @endslot
    @endcomponent
  @endsection<!--usersPageInner-->
@endsection<!--userPageContents-->