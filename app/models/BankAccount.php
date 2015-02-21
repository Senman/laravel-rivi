<?php


class BankAccount extends Eloquent
{

    protected $table = 'bank_accounts';

    protected $softDelete = false;

    protected $guarded = array(); // Important


    public function account()
    {
        return $this->belongsTo('Account');
    }


}