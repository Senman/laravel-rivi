<?php

class FinanceAccountController extends BaseController
{


    public function index()
    {
        $accounts = Account::all();
        return View::make('financeAccount.index')->with('accounts', $accounts);
    }



    public function create()
    {

        $account = new Account();

        return View::make('financeAccount.create')
            ->with('account', $account);
    }


    public function detail($id)
    {
        $account = Account::find($id);

        return View::make('financeAccount.detail')

            ->with('account', $account);
    }


    public function edit($id)
    {
        $account = Account::find($id);

        return View::make('financeAccount.edit')

            ->with('account', $account);
    }


    public function save()
    {

        $account = new Account(Input::all());


        if (!$account->save()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Successfully created Project!');
        return Redirect::action('FinanceAccountController@index');


    }

    public function update($id)
    {

        $account = Account::find($id);


        if (!$account->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('FinanceAccountController@index');


    }


    public function delete()
    {

        $id = Input::get('id');
        $account = Account::find($id);


        if (!$account->delete()) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }

        Session::flash('message', 'Successfully deleted!');
        return Redirect::action('FinanceAccountController@index');


    }
}