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
            Session::flash('error', trans('message.bankAccount.save.error') );
            return Redirect::back()->withInput();
        }

        Session::flash('message', trans('messages.bankAccount.save.success'));
        return Redirect::action('BankAccountController@index');


    }

    public function update($bank_id, $id)
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
    
public function addBankAccount($bank_id){
//ukaze formular kde clolvek bude moci zadat jmeno account
//name
//id dane banky
// ze stranky http://rivi.laravel.com/bank/detail/2
// kliknes na tlacitkopridat ucet banky - form - save	



        return View::make('bankAccount.add')
            ->with('bank_id', $bank_id);

	 }


public function saveBankAccount(){
	//na post se vola tahle funkce
	// ulozi ten bamkovni ucet pod ucet dane banky 

        $user = Auth::user();
        
		        $bank_id = Input::get("_bank_id");

		        $bank = Bank::findOrFail($bank_id);

        $bankAccount = new BankAccount(Input::all());
		//$bankAccount->osi = md5(uniqid(mt_rand(), true));



       
      if (! $bank->bankAccounts()->save($bankAccount)) {

      Session::flash('error', trans('message.bank.save.error') );
    		 return Redirect::back()->withInput();
	}
	 
    Session::flash('message', trans('messages.bank.save.success'));
  return Redirect::action('BankController@detail',array('id'=> $bank_id));
	 
	// if (!$user->account->banks()->save($bank)) {
	 }    
    
    
}