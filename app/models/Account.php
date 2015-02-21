<?php


class Account extends Eloquent
{

    protected $table = 'accounts';

    protected $softDelete = false;

    protected $guarded = array(); // Important


    public function companies()
    {
        return $this->hasMany('Company');
    }


    public function invoices()
    {
        return $this->hasMany('Invoice');
    }


    public function banks()
    {
        return $this->hasMany('Bank');
    }

    public function users()
    {
        return $this->hasMany('User');
    }



}