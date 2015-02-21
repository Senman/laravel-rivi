<?php


class Invoice extends Eloquent
{

    protected $table = 'invoices';

    protected $softDelete = false;

    protected $guarded = array(); // Important




    public function account()
    {
        return $this->belongsTo('Account');
    }




    public function invoiceItems()
    {
        return $this->hasMany('InvoiceItem');
    }






    public function getPriceTotalAttribute()
    {
        $invoiceItems = $this->invoiceItems()->get();

        $sum = 0;
        foreach($invoiceItems as $invoiceItem){

            $sum +=  $invoiceItem->price * $invoiceItem->count;

        }

        return $sum;

    }

    public function getPriceVatTotalAttribute()
    {
        $invoiceItems = $this->invoiceItems()->get();

        $sum = 0;
        foreach($invoiceItems as $invoiceItem){

            $sum +=  $invoiceItem->price * $invoiceItem->count * (($invoiceItem->vat + 100 ) / 100 );

        }

        return $sum;

    }

    public function getVatTotalAttribute()
    {
        $invoiceItems = $this->invoiceItems()->get();

        $sum = 0;
        foreach($invoiceItems as $invoiceItem){

            $sum +=  ($invoiceItem->price * $invoiceItem->count * (($invoiceItem->vat + 100 ) / 100 )) -  ($invoiceItem->price * $invoiceItem->count);


        }

        return $sum;

    }

}