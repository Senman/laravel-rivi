<?php


class BudgetItem extends Eloquent
{

    protected $table = 'budget_items';

    protected $softDelete = false;

    protected $guarded = array(); // Important



    public function budget()
    {
        return $this->belongsTo('Budget');
    }


}