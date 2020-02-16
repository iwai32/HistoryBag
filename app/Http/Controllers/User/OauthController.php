<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Socialite;

class OauthController extends Controller
{
  private $user;

  public function __construct(User $user)
  {
    $this->user = $user;
  }

  /**
   * Googleの認証ページへユーザーをリダイレクト
   */
  public function redirectToGoogle()
  {
    return Socialite::driver('google')->redirect();
  }

  /**
   * Googleからユーザー情報を取得
   */
  public function authGoogleCallback()
  {
    $googleUser =  Socialite::driver('google')->user();

    $userInputs = [
      'email' => $googleUser->email,
      'name' => $googleUser->nickname ?? $googleUser->name,
    ];

    return $this->authAndSignin($userInputs);
  }

  /**
   * 認証情報を元にサインインする
   */
  public function authAndSignin($userInputs)
  {
    $user = $this->user->firstOrNew([
      'email' => $userInputs['email']
    ],[
      'name' => $userInputs['name'],
      'password' => 'socialuser'
    ]);

    $user->save();

    Auth::login($user);

    return redirect()->route('dailyReport');
  }
}
