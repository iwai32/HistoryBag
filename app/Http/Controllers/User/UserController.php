<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //新規登録
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

    //ログイン
    public function toSigninPage()
    {
      return view('users.signin');
    }

    //ログアウト
    public function getLogout()
    {
      Auth::logout();
      return redirect()->route('top');
    }
}
