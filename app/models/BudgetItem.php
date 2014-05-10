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


    public function bills()
    {

        return $this->belongsToMany('Bill', 'bill_budget_item')->withPivot('pivot_name', 'pivot_income', 'pivot_outcome', 'pivot_vat');
    }



    public function getRealIncomeTotalAttribute()
    {
        return $this->bills()->sum('pivot_income');
    }


    public function getRealOutcomeTotalAttribute()
    {
        return $this->bills()->sum('pivot_outcome');
    }


}