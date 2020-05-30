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


Route::group(['prefix' => 'admin', 'middleware' =>'auth'], function() {
    Route::get('movies/create', 'Admin\MoviesController@add');
    Route::post('movies/create','Admin\MoviesController@create');
    Route::get('movies/edit', 'Admin\MoviesController@edit');
    Route::post('movies/edit', 'Admin\MoviesController@update');
    Route::get('movies', 'Admin\MoviesController@shuffle');
    Route::get('movies/delete', 'Admin\MoviesController@delete');

});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
