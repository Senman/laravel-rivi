<?php

class AccountController extends BaseController
{

    public function index()
    {


        $user = Auth::user();
        $account =  $user->account;




       return View::make('account.index')
           ->with('account', $account);


    }


}