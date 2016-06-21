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

Route::get('/', [ 'middleware' => 'auth', 'uses' => 'MainController@index']);

Route::get('/account', [ 'middleware' => 'auth', 'uses' => 'AccountController@index']);
Route::put('/account', [ 'middleware' => 'auth', 'uses' => 'AccountController@create']);
Route::post('/account/{id}', [ 'middleware' => 'auth', 'uses' => 'AccountController@update']);

Route:get( '/agency', [ 'middleware' => 'auth', 'uses' => 'AgencyControler@list']);
Route:get( '/agency/{id}', [ 'middleware' => 'auth', 'uses' => 'AgencyControler@detail']);
Route:get( '/agency/{id}/edit', [ 'middleware' => 'auth', 'uses' => 'AgencyControler@edit_form']);

Route::auth();

