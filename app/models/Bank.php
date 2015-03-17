<?php


class Bank extends Eloquent
{

    protected $table = 'banks';

    protected $softDelete = false;

    protected $guarded = array(); // Important


    public function account()
    {
        return $this->belongsTo('Account');
    }

    public function bankAccounts()
    {
        return $this->hasMany('BankAccount');
    }


}