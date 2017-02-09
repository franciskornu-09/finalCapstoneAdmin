<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DashboardController@index');

Route::get('home', 'DashboardController@index');

Route::get('dashboard','DashboardController@index');

Route::get('event','EventController@index');

Route::get('users','UserController@index');

Route::post('insert','TableController@update');

Route::get('add','TableController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
