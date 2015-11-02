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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', array('uses'  => 'Auth\AuthController@getLogin'));

Route::post('/', array('uses'  => 'Auth\AuthController@postLogin'));

Route::get('/logout', array('uses'  => 'Auth\AuthController@getLogout'));

Route::get('auth/register', array('uses'  => 'Auth\AuthController@getRegister'));
Route::post('auth/register', array('uses'  => 'Auth\AuthController@postRegister'));

Route::group(['middleware'  =>  'App\Http\Middleware\AdminMiddleware'], function() {
    Route::get('/admin', array('uses'  =>  'Admin\AdminController@home'));
});
Route::group(['middleware'  =>  'auth'], function() {
    Route::get('/home', array('uses'    =>  'Profile\BaseController@Home'));
    Route::get('/settings', array('uses'    =>  'Profile\SettingsController@getdbinfo'));
    Route::post('/settings', array('uses'   =>  'Profile\SettingsController@updateinfo'));
    Route::get('/players', array('uses'  =>  'PlayersController@getPlayers'));
    Route::get('/players/{id}', array('uses'    =>  'PlayersController@showplayer'));
    Route::get('/players/{id}/edit', array('uses'    =>  'PlayersController@editplayer'));
    Route::post('/players', array('uses'    =>  'PlayersController@postSearch'));
});