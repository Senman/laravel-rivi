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


Route::get('/account', 'AccountController@index')->before('auth');


Route::get('/user', 'UserController@index')->before('auth');
Route::get('/user/contact/edit/{id}', 'UserController@editContact')->before('auth');
Route::get('/user/edit/{id}', 'UserController@edit')->before('auth');
Route::post('/user/contact/update/{id}', 'UserController@updateContact')->before('auth');
Route::post('/user/update/{id}', 'UserController@update')->before('auth');
Route::get('/user/list', 'UserController@listOfUsers')->before('auth');
Route::get('/user/detail/{id}', 'UserController@detail')->before('auth');

Route::get('/user/password/edit/{id}', 'UserPasswordController@edit')->before('auth');
Route::post('/user/password/update/{id}', 'UserPasswordController@update')->before('auth');




Route::get('/invoice', 'InvoiceController@index')->before('auth');
Route::get('/invoice-create/select-company', 'InvoiceController@createFirst')->before('auth');
Route::get('/invoice-create/confirm.blade.php-details/{id}', 'InvoiceController@createSecond')->before('auth');
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




Route::get('/invoice-chain/create', 'InvoiceChainController@create')->before('auth');
Route::post('/invoice-chain/save', 'InvoiceChainController@save')->before('auth');



Route::get('/invoice-chain-supplier/{id}', 'InvoiceChainSupplierController@index')->before('auth');
Route::get('/invoice-chain-supplier/confirm/{id}/{supplier_id}', 'InvoiceChainSupplierController@confirm')->before('auth');
Route::post('/invoice-chain-supplier/save/{id}', 'InvoiceChainSupplierController@save')->before('auth');



Route::get('/invoice-chain-contractor/{id}', 'InvoiceChainContractorController@index')->before('auth');
Route::get('/invoice-chain-contractor/confirm/{id}/{supplier_id}', 'InvoiceChainContractorController@confirm')->before('auth');
Route::post('/invoice-chain-contractor/save/{id}', 'InvoiceChainContractorController@save')->before('auth');




Route::get('/invoice-chain-item/{id}', 'InvoiceChainItemController@index')->before('auth');
Route::post('/invoice-chain-item/add/{id}', 'InvoiceChainItemController@add')->before('auth');
Route::post('/invoice-chain-item/remove/{id}', 'InvoiceChainItemController@remove')->before('auth');




Route::get('/invoice-chain-detail/{id}', 'InvoiceChainDetailController@index')->before('auth');
Route::post('/invoice-chain-detail/save/{id}', 'InvoiceChainDetailController@save')->before('auth');




Route::get('/invoice-chain-check/{id}', 'InvoiceChainCheckController@index')->before('auth');
Route::post('/invoice-chain-check/save/{id}', 'InvoiceChainCheckController@save')->before('auth');







Route::get('/admin-user', 'AdminUserController@index')->before('auth');
Route::get('/admin-user/detail/{id}', 'AdminUserController@detail')->before('auth');
Route::get('/admin-user/create', 'AdminUserController@create')->before('auth');
Route::get('/admin-user/edit/{id}', 'AdminUserController@edit')->before('auth');
Route::post('/admin-user/update/{id}', 'AdminUserController@update')->before('auth');
Route::post('/admin-user/save', 'AdminUserController@save')->before('auth');
Route::delete('/admin-user/delete', 'AdminUserController@delete')->before('auth');
Route::get('/admin-user-password/{id}', 'AdminUserPasswordController@edit')->before('auth');
Route::post('/admin-user-password/update/{id}', 'AdminUserPasswordController@update')->before('auth');



Route::get('/company', 'CompanyController@index')->before('auth');
Route::get('/company/create', 'CompanyController@create')->before('auth');
Route::get('/company/edit/{id}', 'CompanyController@edit')->before('auth');
Route::post('/company/save', 'CompanyController@save')->before('auth');
Route::post('/company/update/{id}', 'CompanyController@update')->before('auth');
Route::delete('/company/delete', 'CompanyController@delete')->before('auth');
Route::get('/company/detail/{id}', 'CompanyController@detail')->before('auth');






Route::get('/bank', 'BankController@index')->before('auth');
Route::get('/bank/create', 'BankController@create')->before('auth');




Route::get('/bank/edit/{id}', 'BankController@edit')->before('auth');
Route::post('/bank/save', 'BankController@save')->before('auth');
Route::post('/bank/update/{id}', 'BankController@update')->before('auth');
Route::delete('/bank/delete', 'BankController@delete')->before('auth');
Route::get('/bank/detail/{id}', 'BankController@detail')->before('auth');


Route::get('/bank-account/addBankAccount/{bank_id}', 'BankAccountController@addBankAccount')->before('auth');
Route::post('/bank-account/saveBankAccount', 'BankAccountController@saveBankAccount')->before('auth');

Route::get('/bank-account/create/{bank_id}', 'BankAccountController@create')->before('auth');
Route::get('/bank-account/edit/{bank_id}/{id}', 'BankAccountController@edit')->before('auth');
Route::post('/bank-account/save', 'BankAccountController@save')->before('auth');
Route::post('/bank-account/update/{bank_id}/{id}', 'BankAccountController@update')->before('auth');
Route::delete('/bank-account/delete', 'BankAccountController@delete')->before('auth');
Route::get('/bank-account/detail/{bank_id}/{id}', 'BankAccountController@detail')->before('auth');






Route::get('api-rest-company-invoices/{company_rsi}', 'CompanyRestController@invoices' );



Route::get('/company', 'CompanyController@index')->before('auth');



Route::get('/bank-account', 'BankAccountController@index')->before('auth');