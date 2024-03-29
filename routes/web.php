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
    return view('auth/login');
});

//urlにアクセスが来たとき

Route::group(['prefix' => 'admin', 'middleware' =>'auth'], function() {
    Route::get('movies/create', 'Admin\MoviesController@add');
    Route::post('movies/create','Admin\MoviesController@create');
    Route::post('movies/shuffle', 'Admin\MoviesController@update');
    Route::get('movies/shuffle','Admin\MoviesController@shuffle');
    Route::get('movies/delete', 'Admin\MoviesController@delete');

});

Auth::routes();

//    'register' => true, // デフォルトの登録機能ON
//    'login' => true,
    


//Route::get('/home', 'Controller@index')->name('home');
