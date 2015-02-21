<?php


class Account extends Eloquent
{

    protected $table = 'accounts';

    protected $softDelete = false;

    protected $guarded = array(); // Important




    public function invoices()
    {
        return $this->hasMany('Invoice');
    }


    public function bankAccounts()
    {
        return $this->hasMany('BankAccount');
    }

    public function users()
    {
        return $this->hasMany('User');
    }



}