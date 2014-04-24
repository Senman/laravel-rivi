<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/





Route::get('/login', 'LoginController@index')->before('guest');
Route::post('/login', 'LoginController@auth')->before('guest');

Route::get('/logout', 'LogoutController@index')->before('auth');


Route::get('/', 'HomeController@index')->before('auth');



Route::get('/about', 'HomeController@about');



Route::get('/user', 'UserController@index')->before('auth');
