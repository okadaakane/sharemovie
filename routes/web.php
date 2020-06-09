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

Auth::routes();

//    'register' => true, // デフォルトの登録機能ON
//    'login' => true,
    
// Route::get('members/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('members/login', 'Auth\LoginController@login');
// Route::post('members/logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('members/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('members/register', 'Auth\RegisterController@register');

// Route::get('members/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('members/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('members/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('members/password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/home', 'HomeController@index')->name('home');
