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
	Route::resource('users', 'UserController')->except(['show']);
	Route::resource('accounts', 'AccountController')->except(['show']);
	Route::resource('accountHistories', 'AccountHistoryController');

	Route::post('/accounts/apply_for_payout', 'AccountController@apply_for_payout')->name('accounts.apply_for_payout');
	Route::get('/accounts/show/{id?}', 'AccountController@show')->name('accounts.show');
	Route::get('/users/show/{id?}', 'UserController@show')->name('users.show');

	Route::group(['middleware' => 'checkmoderator'], function() {
		Route::get('/users', 'UserController@index')->name('users.index');
		Route::resource('qrcodes', 'QrcodeController')->except(['show']);
		Route::post('/accounts/confirm_pay', 'AccountController@confirm_pay')->name('accounts.confirm_pay');
		Route::post('/accounts', 'AccountController@index')->name('accounts.index');
		Route::post('/accountHistories', 'AccountHistoryController@index')->name('accountHistories.index');
	});

	Route::group(['middleware' => 'checkadmin'], function() {
		Route::post('/accountHistories/create', 'AccountHistoryController@create')->name('accountHistories.create');
		Route::post('/accounts/create', 'AccountController@create')->name('accounts.create');
		Route::resource('roles', 'RoleController');
	});
});

Route::get('/qrcodes/{id}', 'QrcodeController@show')->name('qrcodes.show');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::post('/qrcodes/show_pay', 'QrcodeController@show_pay')->name('qrcodes.show_pay');