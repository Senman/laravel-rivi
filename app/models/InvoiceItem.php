<?php


class InvoiceItem extends Eloquent
{

    protected $table = 'invoice_items';

    protected $softDelete = false;

    protected $guarded = array(); // Important


    public $timestamps = false;


    public function invoice()
    {
        return $this->belongsTo('Invoice');
    }


}