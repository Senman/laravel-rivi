<?php

class FinanceBillTypeController extends BaseController
{


    public function index()
    {
        $billTypes = Type::all();
        return View::make('financeBillType.index')->with('billTypes', $billTypes);
    }



    public function create()
    {

        $billType = new Type();

        return View::make('financeBillType.create')
            ->with('billType', $billType);
    }


    public function detail($id)
    {
        $billType = Type::find($id);

        return View::make('financeBillType.detail')

            ->with('billType', $billType);
    }


    public function edit($id)
    {
        $billType = Type::find($id);

        return View::make('financeBillType.edit')

            ->with('billType', $billType);
    }


    public function save()
    {

        $billType = new Type(Input::all());


        if (!$billType->save()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Successfully created Project!');
        return Redirect::action('FinanceBillTypeController@index');


    }

    public function update($id)
    {

        $billType = Type::find($id);


        if (!$billType->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('FinanceBillTypeController@index');


    }

}