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
Route::post('/user/signup', 'User\UserController@postSignup')->name('user.signup');
//ログイン

//ログアウト
Route::get('/user/logout', 'User\UserController@getLogout')->name('user.logout');

//トップページ
Route::get('/', function() {
    return view('top.index');
})->name('top');

//日報
//ミドルウェアを設定する
Route::get('/contents/daily-report', function () {
    return view('contents.daily-report.index');
})->name('dailyReport');
