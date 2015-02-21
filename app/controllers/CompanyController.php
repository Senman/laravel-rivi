<?php

class CompanyController extends BaseController
{



    public function index()
    {
        $companies = Company::all();
        return View::make('company.index')->with('companies', $companies);
    }




    public function create()
    {

        $company = new Company();




        return View::make('company.create')->with('company', $company);
    }

    public function edit($id)
    {


        $company = Company::find($id);


        return View::make('company.edit')

            ->with('company', $company);


    }


    public function detail($id)
    {


        $company = Company::find($id);


        $projects = $company->projects;


        return View::make('company.detail')

            ->with('company', $company)->with('projects', $projects);


    }


    public function update($id)
    {

        $company = Company::find($id);

        if (!$company->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('CompanyController@index');



    }


    public function save()
    {

        $company = new Company(Input::all());

        if (!$company->save()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Successfully created Project!');
        return Redirect::action('CompanyController@index');


    }



    public function delete()
    {

        $id = Input::get('id');
        $company = Company::find($id);



        if (!$company->delete()) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }

        Session::flash('message', 'Successfully deleted!');
        return Redirect::action('CompanyController@index');


    }


}