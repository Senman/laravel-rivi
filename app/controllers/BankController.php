<?php

class BankController extends BaseController
{


    public function index()
    {

 

        $user = Auth::user();
        $banks = $user->account->banks()->orderBy('name', 'asc')->paginate(10);

        return View::make('bank.index')
            ->with('banks', $banks);
    }



    public function create()
    {

        $bank = new Bank();

        return View::make('bank.create')
            ->with('bank', $bank);
    }


    public function detail($id)
    {
        $bank = Bank::find($id);

        return View::make('bank.detail')

            ->with('bank', $bank);
    }


    public function edit($id)
    {
        $bank = Bank::find($id);

        return View::make('bank.edit')

            ->with('bank', $bank);
    }


    public function save()
    {

        $user = Auth::user();
        $bank = new Bank(Input::all());

        $bank->osi = md5(uniqid(mt_rand(), true));

        if (!$user->account->banks()->save($bank)) {


            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Successfully created Project!');
        return Redirect::action('BankController@index');


    }

    public function update($id)
    {

        $bank = Bank::find($id);


        if (!$bank->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('BankController@index');


    }


    public function delete()
    {

        $id = Input::get('id');
        $bank = Bank::find($id);


        if (!$bank->delete()) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }

        Session::flash('message', 'Successfully deleted!');
        return Redirect::action('BankController@index');


    }
}