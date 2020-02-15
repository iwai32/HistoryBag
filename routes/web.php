<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//新規登録
Route::get('user/signup', 'User\UserController@toSignupPage')->name('user.signupPage');
Route::post('user/signup', 'User\UserController@postSignup')->name('user.signup');
//サインイン
Route::get('user/signin', 'User\UserController@toSigninPage')->name('user.signinPage');
Route::post('user/signin', 'User\UserController@postSignin')->name('user.signin');
//サインアウト
Route::get('user/signout', 'User\UserController@getSignout')->name('user.signout');

//トップページ
Route::get('/', function() {
    return view('top.index');
})->name('top');




//日報
//ミドルウェアを設定する
Route::middleware('auth')->group(function() {
  Route::get('/contents/daily-report', function () {
    return view('contents.daily-report.index');
  })->name('dailyReport');
});