<?php


class Item extends Eloquent
{

    protected $table = 'items';

    protected $softDelete = false;

    protected $guarded = array(); // Important


    public $timestamps = false;


    public function invoice()
    {
        return $this->belongsTo('Invoice');
    }


}