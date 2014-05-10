<?php

class FinanceBudgetItemController extends BaseController
{


    public function index()
    {

        $budgetItems = BudgetItem::all();
        return View::make('financeBudgetItem.index')->with('budgetItems', $budgetItems);
    }


    public function create($budget_id)
    {

        $budgetItem = new BudgetItem();

        $budget = Budget::findOrFail($budget_id);

        $budgetItem->budget = $budget;

        return View::make('financeBudgetItem.create')
            ->with('budgetItem', $budgetItem);
    }


    public function save()
    {

        $budgetItem = new BudgetItem(Input::all());


        if (!$budgetItem->save()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Successfully created Project!');
        return Redirect::action('FinanceBudgetController@detail', $budgetItem->budget->id);


    }


    public function detail($id)
    {
        $budgetItem = BudgetItem::find($id);



        return View::make('financeBudgetItem.detail')

            ->with('budgetItem', $budgetItem);
    }



    public function update($id)
    {

        $budgetItem = BudgetItem::find($id);


        if (!$budgetItem->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('FinanceBudgetController@detail', $budgetItem->budget->id);


    }


    public function edit($id)
    {
        $budgetItem = BudgetItem::find($id);

        return View::make('financeBudgetItem.edit')

            ->with('budgetItem', $budgetItem);
    }


    public function delete()
    {

        $id = Input::get('id');
        $budgetItem = BudgetItem::find($id);
        $budget = $budgetItem->budget;

        if (!$budgetItem->delete()) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }

        Session::flash('message', 'Successfully deleted!');
        return Redirect::action('FinanceBudgetController@detail', $budget->id);


    }

}
