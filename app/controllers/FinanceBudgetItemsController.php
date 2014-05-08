<?php

class FinanceBudgetItemController extends BaseController
{


    public function index()
    {

        $budgetItems = BudgetItem::all();
        return View::make('financeBudgetItem.index')->with('budgetItems', $budgetItems);
    }





}
