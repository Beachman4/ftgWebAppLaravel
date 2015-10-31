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

Route::get('auth/logout', array('uses'  => 'Auth\AuthController@getLogout'));

Route::get('auth/register', array('uses'  => 'Auth\AuthController@getRegister'));
Route::post('auth/register', array('uses'  => 'Auth\AuthController@postRegister'));
Route::get('/home', function() {
    return view('home/home');
});

Route::controllers([
    'password'  =>  'Auth\PasswordController',
]);
