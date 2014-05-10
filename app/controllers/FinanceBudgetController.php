<?php

class FinanceBudgetController extends BaseController
{


    public function index()
    {

        $budgets = Budget::all();
        return View::make('financeBudget.index')->with('budgets', $budgets);
    }



    public function create()
    {

        $budget = new Budget();

        return View::make('financeBudget.create')
            ->with('budget', $budget);
    }


    public function save()
    {

        $budget = new Budget(Input::all());


        if (!$budget->save()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Successfully created Project!');
        return Redirect::action('FinanceBudgetController@index');


    }


    public function detail($id)
    {
        $budget = Budget::find($id);

        $budgetItems =  $budget->budgetItems;

        return View::make('financeBudget.detail')

            ->with('budget', $budget) ->with('budgetItems', $budgetItems);
    }



    public function update($id)
    {

        $budget = Budget::find($id);


        if (!$budget->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('FinanceBudgetController@index');


    }


    public function edit($id)
    {
        $budget = Budget::find($id);

        return View::make('financeBudget.edit')

            ->with('budget', $budget);
    }



    public function delete()
    {

        $id = Input::get('id');
        $budget = Budget::find($id);


        if (!$budget->delete()) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }

        Session::flash('message', 'Successfully deleted!');
        return Redirect::action('FinanceBudgetController@index');


    }


}
