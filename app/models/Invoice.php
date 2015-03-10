<?php


class Invoice extends Eloquent
{

    protected $table = 'invoices';

    protected $softDelete = false;

    protected $guarded = array(); // Important


    protected $hidden = ['password'];





    public function account()
    {
        return $this->belongsTo('Account');
    }




    public function invoiceItems()
    {
        return $this->hasMany('InvoiceItem');
    }






    public static function boot()
    {
        parent::boot();

        static::creating(function($model)
        {
           // $model->created_by = Auth::user()->id;
           // $model->updated_by = Auth::user()->id;

            $model->osi = md5(uniqid(mt_rand(), true));
            $model->state = "new";

        });

        static::updating(function($model)
        {
           // $model->updated_by = Auth::user()->id;
        });
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