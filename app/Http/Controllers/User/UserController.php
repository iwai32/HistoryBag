<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //新規登録ページへ
    public function toSignupPage()
    {
      return view('users.signup');
    }

    //新規登録する
    public function postSignup(Request $request)
    {
      //バリデーション
      $request->validate([
        'name' => 'bail|required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|alpha_num'
      ]);
      
      //DBインサート
      $user = new User([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password'))
      ]);

      //保存
      $user->save();

      //登録したユーザーでログインする
      Auth::login($user);

      //リダイレクト
      return redirect()->route('dailyReport');
    }

    //ログインページへ
    public function toSigninPage()
    {
      //もし既にログインしているなら日報ページへ遷移middlewareで定義していいかも
      return view('users.signin');
    }

    //ログインする
    public function postSignin(Request $request)
    {
      //バリデーション
      $request->validate([
        'email' => 'bail|required|email',
        'password' => 'required|min:8|alpha_num'
      ]);

      $credentials = $request->only('email', 'password');
      //リクエスト内容と一致したユーザーテーブルを取得し、その情報でログインする。

      if (Auth::attempt($credentials)) {
        //認証に成功
        return redirect()->route('dailyReport');
      } else {
        // 認証に失敗
        return redirect()->route('user.signin');
      }
    }

    //ログアウト
    public function getSignout()
    {
      Auth::logout();
      return redirect()->route('top');
    }
}