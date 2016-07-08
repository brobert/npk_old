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

Route::get('/account',          [ 'middleware' => 'auth', 'uses' => 'AccountController@index']);
Route::post('/account',         [ 'middleware' => 'auth', 'uses' => 'AccountController@self_update']);

Route::get( '/agency', [ 'middleware' => 'auth', 'uses' => 'AgencyControler@list']);
Route::get( '/agency/{id}', [ 'middleware' => 'auth', 'uses' => 'AgencyControler@detail']);
Route::get( '/agency/{id}/edit', [ 'middleware' => 'auth', 'uses' => 'AgencyControler@edit_form']);

Route::group(['prefix' => 'manage', 'middleware' => [ 'auth', 'manage' ] ], function () {
    // lista agencji
    Route::get('agency', [ 'as' => 'agency_list', 'uses' => 'Manage\AgencyController@index']);

    // tworzenie agencji
    Route::get('agency/create', [ 'as' => 'agency_create', 'uses' => 'Manage\AgencyController@create']);
    Route::post('agency/create', [ 'as' => 'agency_put', 'uses' => 'Manage\AgencyController@put' ]);

    //edycja agencji
    Route::get('agency/{id}/edit', [ 'as'=> 'agency_edit', 'uses' => 'Manage\AgencyController@edit']);
    Route::post('agency/{id}', [ 'as'=> 'agency_store', 'uses' => 'Manage\AgencyController@store']);

});

    Route::get('res/agency', [ 'uses' => 'Manage\AgencyController@ajax_agency']);

Route::auth();

Route::get( '/forbidden',  [ 'uses' => 'ErrorsController@forbidden']);

