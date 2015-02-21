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
Route::get('/user/password/edit/{id}', 'UserPasswordController@edit')->before('auth');
Route::get('/user/contact/edit/{id}', 'UserController@editContact')->before('auth');
Route::get('/user/edit/{id}', 'UserController@edit')->before('auth');
Route::post('/user/password/update/{id}', 'UserPasswordController@update')->before('auth');
Route::post('/user/contact/update/{id}', 'UserController@updateContact')->before('auth');
Route::post('/user/update/{id}', 'UserController@update')->before('auth');
Route::get('/user/list', 'UserController@listOfUsers')->before('auth');
Route::get('/user/detail/{id}', 'UserController@detail')->before('auth');



Route::get('/invoice', 'InvoiceController@index')->before('auth');
Route::get('/invoice-create/select-company', 'InvoiceController@createFirst')->before('auth');
Route::get('/invoice-create/confirm-details/{id}', 'InvoiceController@createSecond')->before('auth');
Route::get('/invoice-create/add-items/{id}', 'InvoiceController@createThird')->before('auth');
Route::post('/invoice-create/add-items/add', 'InvoiceController@add')->before('auth');
Route::post('/invoice-create/add-items/remove', 'InvoiceController@remove')->before('auth');
Route::get('/invoice-create/finish/{id}', 'InvoiceController@createFinish')->before('auth');
Route::get('/invoice/print/{id}', 'InvoiceController@printInvoice')->before('auth');
Route::get('/invoice/edit/{id}', 'InvoiceController@edit')->before('auth');
Route::get('/invoice/detail/{id}', 'InvoiceController@detail')->before('auth');
Route::post('/invoice/save', 'InvoiceController@save')->before('auth');
Route::post('/invoice/update/{id}', 'InvoiceController@update')->before('auth');
Route::delete('/invoice/delete', 'InvoiceController@delete')->before('auth');
Route::post('/invoice/change-state', 'InvoiceController@changeState')->before('auth');







Route::get('/admin-user', 'FinanceUserController@index')->before('auth');
Route::get('/admin-user/detail/{id}', 'FinanceUserController@detail')->before('auth');
Route::get('/admin-user/create', 'FinanceUserController@create')->before('auth');
Route::get('/admin-user/edit/{id}', 'FinanceUserController@edit')->before('auth');
Route::post('/admin-user/update/{id}', 'FinanceUserController@update')->before('auth');
Route::post('/admin-user/save', 'FinanceUserController@save')->before('auth');
Route::delete('/admin-user/delete', 'FinanceUserController@delete')->before('auth');
Route::get('/admin-user-password/{id}', 'FinanceUserPasswordController@edit')->before('auth');
Route::post('/admin-user-password/update/{id}', 'FinanceUserPasswordController@update')->before('auth');




Route::get('api-rest-company-invoices/{company_rsi}', 'CompanyRestController@invoices' );






