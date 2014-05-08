<?php

class FinanceBillController extends BaseController
{


    public function index()
    {
        $bills = Bill::all();
        return View::make('financeBill.index')->with('bills', $bills);
    }

    public function archived()
    {
        $bills = Bill::all();
        return View::make('financeBill.archived')->with('bills', $bills);
    }


    public function create()
    {

        $bill = new Bill();

        $types = DB::table('types')->orderBy('name', 'asc')->lists('name','id');

        $bill->date_issued = date("Y-m-d");
        $bill->due_date = date("Y-m-d");
        $bill->date_vat = date("Y-m-d");

        $bill->vat = 21;

        $bill->income = 0;

        $bill->outcome = 0;


        return View::make('financeBill.create')
            ->with('bill', $bill)->with('types', $types);
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

        return View::make('financeBill.edit')

            ->with('bill', $bill);
    }


    public function save()
    {

        $bill = new Bill(Input::all());


        if (!$bill->save()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

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
        return Redirect::action('FinanceBillController@index');


    }


}