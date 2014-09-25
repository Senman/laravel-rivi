<?php

class UserController extends BaseController
{

    public function index()
    {

        $user = Auth::user();


        return View::make('user.index')

            ->with('user', $user);


    }

    public function edit($id)
    {
        //$user = Auth::user();
        $user = User::find($id);
        return View::make('user.edit')

            ->with('user', $user);

    }


    public function update($id)
    {

        //$user = Auth::user();
        $user = User::find($id);

        if (!$user->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('UserController@index');


    }

    public function editContact($id)
    {
        //$user = Auth::user();
        $user = User::find($id);

        return View::make('user.contact')

            ->with('user', $user);

    }


    public function updateContact($id)
    {
        $user = User::find($id);
        //$user = Auth::user();


        if (!$user->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('UserController@index');


    }

    public function listOfUsers()
    {
        $users = User::all();
        return View::make('user.listOfUsers')->with('users', $users);
    }


    public function detail($id)
    {
        $user = User::find($id);

        return View::make('user.index')
            ->with('user', $user);


    }
}