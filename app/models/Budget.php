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


    public function getIncomeTotalAttribute()
    {
        return $this->budgetItems()->sum('income');
    }


    public function getOutcomeTotalAttribute()
    {
        return $this->budgetItems()->sum('outcome');
    }



    public function getRealOutcomeTotalAttribute()
    {
        $budgetItems = $this->budgetItems()->get();

        $sum = 0;
        foreach($budgetItems as $budgetItem){
            $sum += $budgetItem->realOutcomeTotal;

        }
        return    $sum;
    }

    public function getRealIncomeTotalAttribute()
    {
        $budgetItems = $this->budgetItems()->get();

        $sum = 0;
        foreach($budgetItems as $budgetItem){
            $sum += $budgetItem->realIncomeTotal;

        }
        return    $sum;
    }
}