<?php

class FinanceBillTypeController extends BaseController
{


    public function index()
    {
        $billTypes = BillType::all();
        return View::make('financeBillType.index')->with('billTypes', $billTypes);
    }



    public function create()
    {

        $billType = new BillType();

        return View::make('financeBillType.create')
            ->with('billType', $billType);
    }


    public function detail($id)
    {
        $billType = BillType::find($id);

        return View::make('financeBillType.detail')

            ->with('billType', $billType);
    }


    public function edit($id)
    {
        $billType = BillType::find($id);

        return View::make('financeBillType.edit')

            ->with('billType', $billType);
    }


    public function save()
    {

        $billType = new BillType(Input::all());


        if (!$billType->save()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Successfully created Project!');
        return Redirect::action('FinanceBillTypeController@index');


    }

    public function update($id)
    {

        $billType = BillType::find($id);


        if (!$billType->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('FinanceBillTypeController@index');


    }


    public function delete()
    {

        $id = Input::get('id');
        $billType = BillType::find($id);


        if (!$billType->delete()) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }

        Session::flash('message', 'Successfully deleted!');
        return Redirect::action('FinanceBillTypeController@index');


    }
}