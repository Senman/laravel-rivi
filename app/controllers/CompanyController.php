<?php

class CompanyController extends BaseController
{



    public function index()
    {
        $user = Auth::user();
        $companies =  $user->account->companies()->orderBy('name', 'asc')->paginate(10);
        return View::make('company.index')->with('companies', $companies);
    }




    public function create()
    {

        $company = new Company();




        return View::make('company.create')->with('company', $company);
    }

    public function edit($id)
    {

        $user = Auth::user();
        $company =  $user->account->companies()->findOrFail($id);


        return View::make('company.edit')

            ->with('company', $company);


    }


    public function detail($id)
    {

        $user = Auth::user();
        $company =  $user->account->companies()->findOrFail($id);


        $projects = $company->projects;


        return View::make('company.detail')

            ->with('company', $company)->with('projects', $projects);


    }


    public function update($id)
    {


        $user = Auth::user();
        $company =  $user->account->companies()->findOrFail($id);


        if (!$company->update(Input::all())) {
            Session::flash('error', trans('message.company.update.error') );
            return Redirect::back()->withInput();
        }
        Session::flash('message', trans('messages.company.update.success'));
        return Redirect::action('CompanyController@index');



    }


    public function save()
    {

        $user = Auth::user();
        $account =  $user->account;

        $company = new Company(Input::all());


        if (!$account->companies()->save($company)) {
            Session::flash('error', trans('message.company.save.error') );
            return Redirect::back()->withInput();
        }

        Session::flash('message', trans('messages.company.save.success'));
        return Redirect::action('CompanyController@index');


    }



    public function delete()
    {

        $id = Input::get('id');

        $user = Auth::user();
        $company =  $user->account->companies()->findOrFail($id);



        if (!$company->delete()) {
            Session::flash('error', trans('message.company.delete.error') );
            return Redirect::back();
        }

        Session::flash('message', trans('messages.company.delete.success'));
        return Redirect::action('CompanyController@index');


    }


}