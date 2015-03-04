<?php

class BankAccountController extends BaseController
{



    public function create($bank_id)
    {

        $bankAccount = new BankAccount();

        return View::make('bankAccount.create')
            ->with('bankAccount', $bankAccount);
    }


    public function detail($bank_id, $id)
    {
        $bankAccount = BankAccount::find($id);

        return View::make('bankAccount.detail')

            ->with('bankAccount', $bankAccount);
    }


    public function edit($bank_id, $id)
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

    public function update($bank_id, $id)
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