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


Route::get('/finance-bill', 'FinanceBillController@index')->before('auth');
Route::get('/finance-bill/create', 'FinanceBillController@create')->before('auth');
Route::post('/finance-bill/save', 'FinanceBillController@save')->before('auth');
Route::get('/finance-bill/edit/{id}', 'FinanceBillController@edit')->before('auth');
Route::post('/finance-bill/delete', 'FinanceBillController@delete')->before('auth');
Route::get('/finance-bill/detail/{id}', 'FinanceBillController@detail')->before('auth');
Route::post('/finance-bill/update/{id}', 'FinanceBillController@update')->before('auth');



Route::get('/finance-invoice', 'FinanceInvoiceController@index')->before('auth');
Route::get('/finance-invoice/create', 'FinanceInvoiceController@create')->before('auth');
Route::get('/finance-invoice/edit/{id}', 'FinanceInvoiceController@edit')->before('auth');
Route::get('/finance-invoice/detail/{id}', 'FinanceInvoiceController@detail')->before('auth');
Route::post('/finance-invoice/save', 'FinanceInvoiceController@save')->before('auth');
Route::post('/finance-invoice/update/{id}', 'FinanceInvoiceController@update')->before('auth');
Route::post('/finance-invoice/delete', 'FinanceInvoiceController@delete')->before('auth');



Route::get('/finance-company', 'FinanceCompanyController@index')->before('auth');
Route::get('/finance-company/create', 'FinanceCompanyController@create')->before('auth');
Route::get('/finance-company/edit/{id}', 'FinanceCompanyController@edit')->before('auth');
Route::post('/finance-company/save', 'FinanceCompanyController@save')->before('auth');
Route::post('/finance-company/update/{id}', 'FinanceCompanyController@update')->before('auth');
Route::post('/finance-company/delete', 'FinanceCompanyController@delete')->before('auth');

Route::get('/finance-company/detail/{id}', 'FinanceCompanyController@detail')->before('auth');







Route::get('/finance-bill-type', 'FinanceBillTypeController@index')->before('auth');
Route::get('/finance-bill-type/create', 'FinanceBillTypeController@create')->before('auth');
Route::post('/finance-bill-type/save', 'FinanceBillTypeController@save')->before('auth');
Route::get('/finance-bill-type/edit/{id}', 'FinanceBillTypeController@edit')->before('auth');
Route::post('/finance-bill-type/delete', 'FinanceBillTypeController@delete')->before('auth');
Route::get('/finance-bill-type/detail/{id}', 'FinanceBillTypeController@detail')->before('auth');
Route::post('/finance-bill-type/update/{id}', 'FinanceBillTypeController@update')->before('auth');



Route::get('/finance-budget', 'FinanceBudgetController@index')->before('auth');
Route::get('/finance-budget/create', 'FinanceBudgetController@create')->before('auth');
Route::post('/finance-budget/save', 'FinanceBudgetController@save')->before('auth');
Route::get('/finance-budget/detail/{id}', 'FinanceBudgetController@detail')->before('auth');

Route::get('/finance-budget/edit/{id}', 'FinanceBudgetController@edit')->before('auth');
Route::post('/finance-budget/delete', 'FinanceBudgetController@delete')->before('auth');