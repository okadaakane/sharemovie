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

Route::get('/', function () {
    return view('welcome');
});

//urlにアクセスが来たとき

Route::group(['prefix' => 'admin', 'middleware' =>'auth'], function() {
    Route::get('movies/create', 'Admin\MoviesController@add');
    Route::post('movies/create','Admin\MoviesController@create');
    Route::post('movies/shuffle', 'Admin\MoviesController@update');
    Route::get('movies/shuffle','Admin\MoviesController@shuffle');
    Route::get('movies/delete', 'Admin\MoviesController@delete');

});

Auth::routes([
 //'verify'   => true, // メール確認機能いらない（※5.7系以上のみ）
    'register' => true, // デフォルトの登録機能ON
 //   'login' => true,
  // 'reset'    => true,  // メールリマインダー機能いらない
]);
Route::get('/home', 'HomeController@index')->name('home');
