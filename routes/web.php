<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can login web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//登录
Route::prefix('login')->group(function(){
    Route::get('login','Login\LoginController@login');  //注册页
    Route::get('add','Login\LoginController@add');  //登录首页

});