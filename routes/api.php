<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'Auth\AuthenticateController@authenticate');
Route::post('login-refresh', 'Auth\AuthenticateController@refreshToken');
Route::get('me', 'Auth\AuthenticateController@getAuthenticatedUser');

$this->group(['namespace' => 'api', 'middleware' => 'auth:api'], function(){

	// usuarios
	Route::resource('users', 'UserController');
	
	// produtos
	Route::resource('products', 'ProductController');

});
