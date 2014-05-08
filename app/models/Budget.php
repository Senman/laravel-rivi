<?php


class Budget extends Eloquent
{

    protected $table = 'budgets';

    protected $softDelete = false;

    protected $guarded = array(); // Important


    public function budgetItems()
    {
        return $this->hasMany('BudgetItem');
    }


}