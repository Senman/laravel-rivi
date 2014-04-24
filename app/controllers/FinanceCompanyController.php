<?php

class FinanceCompanyController extends BaseController
{



    public function index()
    {
        $companies = Company::all();
        return View::make('financeCompany.index')->with('companies', $companies);
    }




    public function create()
    {

        $company = new Company();




        return View::make('financeCompany.create')->with('company', $company);
    }

    public function edit($id)
    {


        $company = Company::find($id);


        return View::make('financeCompany.edit')

            ->with('company', $company);


    }


    public function detail($id)
    {


        $company = Company::find($id);


        $projects = $company->projects;


        return View::make('financeCompany.detail')

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
        return Redirect::action('FinanceCompanyController@index');



    }


    public function save()
    {

        $company = new Company(Input::all());

        if (!$company->save()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Successfully created Project!');
        return Redirect::action('FinanceCompanyController@index');


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
        return Redirect::action('FinanceCompanyController@index');


    }


}