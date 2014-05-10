<?php


class Bill extends Eloquent
{

    protected $table = 'bills';

    protected $softDelete = false;

    protected $guarded = array(); // Important


    public function budgetItems()
    {

        return $this->belongsToMany('BudgetItem', 'bill_budget_item')->withPivot('pivot_name', 'pivot_income', 'pivot_outcome', 'pivot_vat');
    }



    public function getIncomeTotalAttribute()
    {
        return $this->budgetItems()->sum('pivot_income');
    }


    public function getOutcomeTotalAttribute()
    {
        return $this->budgetItems()->sum('pivot_outcome');
    }

}