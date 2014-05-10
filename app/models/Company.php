<?php


class Company extends Eloquent
{

    protected $table = 'companies';

    protected $softDelete = false;

    protected $guarded = array(); // Important


    public function invoices()
    {
        return $this->hasMany('Invoice');
    }


}