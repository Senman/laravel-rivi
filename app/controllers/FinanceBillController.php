<?php

class FinanceBillController extends BaseController
{


    public function index()
    {
        $bills = Bill::where('paid',false)->orderBy('date_issued','desc')->paginate(10);
        return View::make('financeBill.index')->with('bills', $bills);
    }

    public function paid()
    {
        $bills = Bill::where('paid',true)->paginate(10);
        return View::make('financeBill.paid')->with('bills', $bills);
    }


    public function download($id)
    {

        $bill = Bill::find($id);


        $destinationPath = public_path().'/uploads/bills/'. $bill->uploadName;

        return Response::download($destinationPath,  $bill-> originalName );
    }


    public function create()
    {

        $bill = new Bill();

        $billTypes = BillType::orderBy('name', 'asc')->lists('name', 'name');

        $budgets = Budget::where('state', 'active')->orderBy('name', 'asc')->get();

        $budgetItemSelect = array();

        foreach ($budgets as $budget) {
            foreach ($budget->budgetItems as $budgetItem) {


                $budgetItemSelect[$budgetItem->id] = '[' . $budget->name . '] - ' . $budgetItem->name;
            }
        }


        $bill->date_issued = date("Y-m-d");
        $bill->due_date = date("Y-m-d");
        $bill->date_vat = date("Y-m-d");

        $bill->vat = 21;

        $bill->income = 0;

        $bill->outcome = 0;


        return View::make('financeBill.create')
            ->with('bill', $bill)->with('billTypes', $billTypes)->with('budgetItemSelect', $budgetItemSelect);
    }


    public function detail($id)
    {
        $bill = Bill::find($id);

        return View::make('financeBill.detail')

            ->with('bill', $bill);
    }


    public function edit($id)
    {
        $bill = Bill::find($id);
        $budgets = Budget::where('state', 'active')->orderBy('name', 'asc')->get();
        $budgetItemSelect = array();
        foreach ($budgets as $budget) {
            foreach ($budget->budgetItems as $budgetItem) {
                $budgetItemSelect[$budgetItem->id] = '[' . $budget->name . '] - ' . $budgetItem->name;
            }
        }
        $billTypes = BillType::orderBy('name', 'asc')->lists('name', 'name');
        return View::make('financeBill.edit')
            ->with('bill', $bill)->with('billTypes', $billTypes)->with('budgetItemSelect', $budgetItemSelect);
    }


    public function editItem($id)
    {
        $bill = Bill::find($id);
        $budgets = Budget::where('state', 'active')->orderBy('name', 'asc')->get();
        $budgetItemSelect = array();
        foreach ($budgets as $budget) {
            foreach ($budget->budgetItems as $budgetItem) {
                $budgetItemSelect[$budgetItem->id] = '[' . $budget->name . '] - ' . $budgetItem->name;
            }
        }
        $billTypes = BillType::orderBy('name', 'asc')->lists('name', 'name');
        return View::make('financeBill.editItem')
            ->with('bill', $bill)->with('billTypes', $billTypes)->with('budgetItemSelect', $budgetItemSelect);
    }



    public function addItem(){

        $bill_id = Input::get('bill_id');
        $budget_item_id = Input::get('budget_item_id');
        $bill = Bill::findOrFail($bill_id);

        $pivot_name  = Input::get('pivot_name');
        $pivot_income = Input::get('pivot_income');
        $pivot_outcome = Input::get('pivot_outcome');
        $pivot_vat    = Input::get('pivot_vat');

        $budgetItem = BudgetItem::findOrFail($budget_item_id);


        $bill->budgetItems()->detach($budgetItem);

        $bill->budgetItems()->attach($budgetItem, array('pivot_name' => $pivot_name, 'pivot_income' => $pivot_income, 'pivot_outcome' => $pivot_outcome, 'pivot_vat' => $pivot_vat));


        Session::flash('message', 'Successfully created Project!');
        return Redirect::action('FinanceBillController@editItem', $bill_id );

    }




    public function removeItem(){

        $bill_id = Input::get('bill_id');
        $bill = Bill::findOrFail($bill_id);

        $budgetItem_id = Input::get('budgetItem_id');
        $budgetItem = BudgetItem::findOrFail($budgetItem_id);





        $bill->budgetItems()->detach($budgetItem);


        Session::flash('message', 'Successfully created Project!');
        return Redirect::action('FinanceBillController@editItem', $bill->id );

    }





    public function save()
    {

        $bill = new Bill(Input::all());

        $receivedFile = Input::file('_file');


        $bill->created_by = Auth::user()->firstName .' '. Auth::user()->lastName ;

        if(isset($receivedFile)) {

            $bill->uploadName = str_random(8);
            $destinationPath = public_path() . '/uploads/bills/';
            $filename = $receivedFile->getClientOriginalName();
            $bill->originalName = $filename;

            $uploadSuccess = Input::file('_file')->move($destinationPath, $bill->uploadName);

        }

        if (!$bill->save()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        $id = Input::get('_budget_item');

        $budgetItem = BudgetItem::find($id);

        $bill->budgetItems()->attach($budgetItem, array('pivot_name' => $bill->name, 'pivot_income' => $bill->income, 'pivot_outcome' => $bill->outcome, 'pivot_vat' => $bill->vat));


        Session::flash('message', 'Successfully created Project!');
        return Redirect::action('FinanceBillController@index');


    }

    public function update($id)
    {

        $bill = Bill::find($id);


        if (!$bill->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('FinanceBillController@detail', $bill->id );


    }


    public function delete()
    {

        $id = Input::get('id');
        $bill = Bill::find($id);


        if (!$bill->delete()) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }

        Session::flash('message', 'Successfully deleted!');
        return Redirect::action('FinanceBillController@index');


    }


    public function pay()
    {
        $id = Input::get('id');
        $bill = Bill::find($id);
        $update = array(
            'paid' => true,
            'date_paid' => date('Y-m-d'),
            'paid_by' =>    Auth::user()->firstName .' '. Auth::user()->lastName );

        if (!$bill->update($update)) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }

        Session::flash('message', 'Successfully deleted!');
        return Redirect::action('FinanceBillController@detail', $bill->id);
    }


    public function unpay()
    {
        $id = Input::get('id');
        $bill = Bill::find($id);
        $update = array(
            'paid' => false,
            'date_paid' => '0000-00-00',
            'paid_by' =>    '' );

        if (!$bill->update($update)) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }

        Session::flash('message', 'Successfully deleted!');
        return Redirect::action('FinanceBillController@detail', $bill->id);


    }

}