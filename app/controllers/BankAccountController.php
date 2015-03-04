<?php

class BankAccountController extends BaseController
{


    public function index()
    {
        $bankAccounts = BankAccount::all();
        return View::make('bankAccount.index')
            ->with('bankAccounts', $bankAccounts);
    }



    public function create()
    {

        $bankAccount = new BankAccount();

        return View::make('bankAccount.create')
            ->with('bankAccount', $bankAccount);
    }


    public function detail($id)
    {
        $bankAccount = BankAccount::find($id);

        return View::make('bankAccount.detail')

            ->with('bankAccount', $bankAccount);
    }


    public function edit($id)
    {
        $bankAccount = BankAccount::find($id);

        return View::make('bankAccount.edit')

            ->with('bankAccount', $bankAccount);
    }


    public function save()
    {

        $bankAccount = new BankAccount(Input::all());


        if (!$bankAccount->save()) {
            Session::flash('error', trans('message.bankAccount.save.error') );
            return Redirect::back()->withInput();
        }

        Session::flash('message', trans('messages.bankAccount.save.success'));
        return Redirect::action('BankAccountController@index');


    }

    public function update($id)
    {

        $bankAccount = BankAccount::find($id);


        if (!$bankAccount->update(Input::all())) {
            Session::flash('error', trans('message.bankAccount.update.error') );
            return Redirect::back()->withInput();
        }
        Session::flash('message', trans('messages.bankAccount.update.success'));
        return Redirect::action('BankAccountController@index');


    }


    public function delete()
    {

        $id = Input::get('id');
        $bankAccount = BankAccount::find($id);


        if (!$bankAccount->delete()) {
            Session::flash('error', trans('message.bankAccount.delete.error') );
            return Redirect::back();
        }

        Session::flash('message', trans('messages.bankAccount.delete.success'));
        return Redirect::action('BankAccountController@index');


    }
}