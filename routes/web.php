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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// only logged in user can view this routes
Route::group(['middleware' => 'auth'], function() {
	Route::resource('qrcodes', 'QrcodeController')->middleware('checkadmin');
	Route::resource('roles', 'RoleController');
	Route::resource('transactions', 'TransactionController');
	Route::resource('users', 'UserController');
	Route::resource('accounts', 'AccountController');
	Route::resource('accountHistories', 'AccountHistoryController');

	Route::group(['middleware' => 'checkmoderator'], function() {
		Route::get('/users', 'UserController@index')->name('users.index');
	});
});