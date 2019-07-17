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
	Route::resource('transactions', 'TransactionController');
	Route::resource('users', 'UserController');
	Route::resource('accounts', 'AccountController');
	Route::resource('accountHistories', 'AccountHistoryController');

	Route::post('/accounts/apply_for_payout', 'AccountController@apply_for_payout')->name('accounts.apply_for_payout');

	Route::group(['middleware' => 'checkmoderator'], function() {
		Route::get('/users', 'UserController@index')->name('users.index');
	});

	Route::group(['middleware' => 'checkadmin'], function() {
		Route::resource('qrcodes', 'QrcodeController');
		Route::post('/accounts/confirm_pay', 'AccountController@confirm_pay')->name('accounts.confirm_pay');
		Route::resource('roles', 'RoleController');
	});
});