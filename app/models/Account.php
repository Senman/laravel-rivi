<?php


class Account extends Eloquent
{

    protected $table = 'accounts';

    protected $softDelete = false;

    protected $guarded = array(); // Important


}