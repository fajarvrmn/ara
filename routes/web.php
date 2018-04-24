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
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function() {
	Route::resource('kamera','KameraController');
	Route::resource('sewa','DetailsewaController');
	Route::resource('user', 'UsersController');
	Route::resource('kembali','KembaliController');

});

Route::group(['prefix' => 'member', 'middleware' => ['role:member']], function() {
	Route::resource('kamera','KameraController');
	Route::resource('sewa','DetailsewaController');
    Route::resource('user', 'UsersController');
	Route::resource('kembali','KembaliController');

});

Route::resource('kamera','KameraController');
Auth::routes();

Route::resource('sewa','DetailsewaController');
Auth::routes();

Route::resource('kembali','KembaliController');
Auth::routes();

Route::resource('user', 'UsersController');
Auth::routes();


