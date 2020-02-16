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
   * Twitterの認証ページへユーザーをリダイレクト
   */
  public function redirectToTwitter()
  {
    return $this->redirectToSocial('twitter');
  }

  /**
   * Googleの認証ページへユーザーをリダイレクト
   */
  public function redirectToGoogle()
  {
    return $this->redirectToSocial('google');
  }

  /**
   * Githubの認証ページへユーザーをリダイレクト
   */
  public function redirectToGithub()
  {
    return $this->redirectToSocial('github');
  }

  /**
   * 指定のSNSへリダイレクト
   */
  public function redirectToSocial($socialName)
  {
    return Socialite::driver($socialName)->redirect();
  }

  /**
   * Twitterからユーザー情報を取得
   */
  public function authTwitterCallback()
  {
    $twitterUser =  $this->getSocialUser('twitter');
    return $this->authAndSignin($twitterUser);
  }

  /**
   * Googleからユーザー情報を取得
   */
  public function authGoogleCallback()
  {
    $googleUser =  $this->getSocialUser('google');
    return $this->authAndSignin($googleUser);
  }

  /**
   * Githubからユーザー情報を取得
   */
  public function authGithubCallback()
  {
    $githubUser = $this->getSocialUser('github');
    return $this->authAndSignin($githubUser);
  }

  /**
   * SNSからユーザー情報を取得
   */
  public function getSocialUser($socialName)
  {
    return Socialite::driver($socialName)->user();
  }

  /**
   * 認証情報を元にサインインする
   */
  public function authAndSignin($userInputs)
  {
    $user = $this->user->firstOrNew([
      'email' => $userInputs->email
    ],[
      'name' => $userInputs->nickname ?? $userInputs->name,
      'password' => 'socialuser'
    ]);

    $user->save();

    Auth::login($user);

    return redirect()->route('dailyReport');
  }
}
