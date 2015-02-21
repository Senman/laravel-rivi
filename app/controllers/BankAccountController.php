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
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Successfully created Project!');
        return Redirect::action('BankAccountController@index');


    }

    public function update($id)
    {

        $bankAccount = BankAccount::find($id);


        if (!$bankAccount->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('BankAccountController@index');


    }


    public function delete()
    {

        $id = Input::get('id');
        $bankAccount = BankAccount::find($id);


        if (!$bankAccount->delete()) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }

        Session::flash('message', 'Successfully deleted!');
        return Redirect::action('BankAccountController@index');


    }
}