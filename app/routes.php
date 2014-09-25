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



Route::get('/finance-bill', 'FinanceBillController@index')->before('auth');
Route::get('/finance-bill-paid', 'FinanceBillController@paid')->before('auth');
Route::get('/finance-bill/create', 'FinanceBillController@create')->before('auth');
Route::post('/finance-bill/save', 'FinanceBillController@save')->before('auth');
Route::get('/finance-bill/edit/{id}', 'FinanceBillController@edit')->before('auth');
Route::delete('/finance-bill/delete', 'FinanceBillController@delete')->before('auth');
Route::get('/finance-bill/detail/{id}', 'FinanceBillController@detail')->before('auth');
Route::post('/finance-bill/update/{id}', 'FinanceBillController@update')->before('auth');
Route::get('/finance-bill/download/{id}', 'FinanceBillController@download')->before('auth');
Route::post('/finance-bill/pay', 'FinanceBillController@pay')->before('auth');
Route::post('/finance-bill/unpay', 'FinanceBillController@unpay')->before('auth');
Route::get('/finance-bill/item/{id}', 'FinanceBillController@editItem')->before('auth');
Route::post('/finance-bill/item/add', 'FinanceBillController@addItem')->before('auth');
Route::delete('/finance-bill/item/remove', 'FinanceBillController@removeItem')->before('auth');


Route::get('/finance-invoice', 'FinanceInvoiceController@index')->before('auth');
Route::get('/finance-invoice-create/select-company', 'FinanceInvoiceController@createFirst')->before('auth');
Route::get('/finance-invoice-create/confirm-details/{id}', 'FinanceInvoiceController@createSecond')->before('auth');
Route::get('/finance-invoice-create/add-items/{id}', 'FinanceInvoiceController@createThird')->before('auth');
Route::post('/finance-invoice-create/add-items/add', 'FinanceInvoiceController@add')->before('auth');
Route::post('/finance-invoice-create/add-items/remove', 'FinanceInvoiceController@remove')->before('auth');
Route::get('/finance-invoice-create/finish/{id}', 'FinanceInvoiceController@createFinish')->before('auth');
Route::get('/finance-invoice/print/{id}', 'FinanceInvoiceController@printInvoice')->before('auth');
Route::get('/finance-invoice/edit/{id}', 'FinanceInvoiceController@edit')->before('auth');
Route::get('/finance-invoice/detail/{id}', 'FinanceInvoiceController@detail')->before('auth');
Route::post('/finance-invoice/save', 'FinanceInvoiceController@save')->before('auth');
Route::post('/finance-invoice/update/{id}', 'FinanceInvoiceController@update')->before('auth');
Route::delete('/finance-invoice/delete', 'FinanceInvoiceController@delete')->before('auth');
Route::post('/finance-invoice/change-state', 'FinanceInvoiceController@changeState')->before('auth');





Route::get('/finance-company', 'FinanceCompanyController@index')->before('auth');
Route::get('/finance-company/create', 'FinanceCompanyController@create')->before('auth');
Route::get('/finance-company/edit/{id}', 'FinanceCompanyController@edit')->before('auth');
Route::post('/finance-company/save', 'FinanceCompanyController@save')->before('auth');
Route::post('/finance-company/update/{id}', 'FinanceCompanyController@update')->before('auth');
Route::delete('/finance-company/delete', 'FinanceCompanyController@delete')->before('auth');
Route::get('/finance-company/detail/{id}', 'FinanceCompanyController@detail')->before('auth');







Route::get('/finance-bill-type', 'FinanceBillTypeController@index')->before('auth');
Route::get('/finance-bill-type/create', 'FinanceBillTypeController@create')->before('auth');
Route::post('/finance-bill-type/save', 'FinanceBillTypeController@save')->before('auth');
Route::get('/finance-bill-type/edit/{id}', 'FinanceBillTypeController@edit')->before('auth');
Route::delete('/finance-bill-type/delete', 'FinanceBillTypeController@delete')->before('auth');
Route::get('/finance-bill-type/detail/{id}', 'FinanceBillTypeController@detail')->before('auth');
Route::post('/finance-bill-type/update/{id}', 'FinanceBillTypeController@update')->before('auth');




Route::get('/finance-account', 'FinanceAccountController@index')->before('auth');
Route::get('/finance-account/create', 'FinanceAccountController@create')->before('auth');
Route::post('/finance-account/save', 'FinanceAccountController@save')->before('auth');
Route::get('/finance-account/edit/{id}', 'FinanceAccountController@edit')->before('auth');
Route::delete('/finance-account/delete', 'FinanceAccountController@delete')->before('auth');
Route::get('/finance-account/detail/{id}', 'FinanceAccountController@detail')->before('auth');
Route::post('/finance-account/update/{id}', 'FinanceAccountController@update')->before('auth');





Route::get('/finance-budget', 'FinanceBudgetController@index')->before('auth');
Route::get('/finance-budget/create', 'FinanceBudgetController@create')->before('auth');
Route::post('/finance-budget/save', 'FinanceBudgetController@save')->before('auth');
Route::get('/finance-budget/detail/{id}', 'FinanceBudgetController@detail')->before('auth');
Route::post('/finance-budget/update/{id}', 'FinanceBudgetController@update')->before('auth');
Route::get('/finance-budget/edit/{id}', 'FinanceBudgetController@edit')->before('auth');
Route::delete('/finance-budget/delete', 'FinanceBudgetController@delete')->before('auth');


Route::get('/finance-budget-item/create/{budget_id}', 'FinanceBudgetItemController@create')->before('auth');
Route::post('/finance-budget-item/save', 'FinanceBudgetItemController@save')->before('auth');
Route::get('/finance-budget-item', 'FinanceBudgetItemController@index')->before('auth');
Route::post('/finance-budget-item/update/{id}', 'FinanceBudgetItemController@update')->before('auth');
Route::get('/finance-budget-item/edit/{id}', 'FinanceBudgetItemController@edit')->before('auth');
Route::delete('/finance-budget-item/delete', 'FinanceBudgetItemController@delete')->before('auth');
Route::get('/finance-budget-item/detail/{id}', 'FinanceBudgetItemController@detail')->before('auth');




Route::get('/finance-user', 'FinanceUserController@index')->before('auth');
Route::get('/finance-user/detail/{id}', 'FinanceUserController@detail')->before('auth');
Route::get('/finance-user/create', 'FinanceUserController@create')->before('auth');
Route::get('/finance-user/edit/{id}', 'FinanceUserController@edit')->before('auth');
Route::post('/finance-user/update/{id}', 'FinanceUserController@update')->before('auth');
Route::post('/finance-user/save', 'FinanceUserController@save')->before('auth');
Route::delete('/finance-user/delete', 'FinanceUserController@delete')->before('auth');
Route::get('/finance-user-password/{id}', 'FinanceUserPasswordController@edit')->before('auth');
Route::post('/finance-user-password/update/{id}', 'FinanceUserPasswordController@update')->before('auth');