<?php


class Invoice extends Eloquent
{

    protected $table = 'invoices';

    protected $softDelete = false;

    protected $guarded = array(); // Important




}