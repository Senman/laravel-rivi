<?php


class Invoice extends Eloquent
{

    protected $table = 'invoices';

    protected $softDelete = false;

    protected $guarded = array(); // Important



    public function company()
    {
        return $this->belongsTo('Company');
    }


    public function items()
    {
        return $this->hasMany('Item');
    }


    public function getPriceTotalAttribute()
    {
         $items = $this->items()->get();

        $sum = 0;
        foreach($items as $item){

            $sum +=  $item->price * $item->count;

        }

        return $sum;

    }

    public function getPriceVatTotalAttribute()
    {
        $items = $this->items()->get();

        $sum = 0;
        foreach($items as $item){

            $sum +=  $item->price * $item->count * (($item->vat + 100 ) / 100 );

        }

        return $sum;

    }

    public function getVatTotalAttribute()
    {
        $items = $this->items()->get();

        $sum = 0;
        foreach($items as $item){

            $sum +=  ($item->price * $item->count * (($item->vat + 100 ) / 100 )) -  ($item->price * $item->count);


        }

        return $sum;

    }

}