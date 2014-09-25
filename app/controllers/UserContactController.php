<?php

class UserContactController extends BaseController
{

    public function index()
    {

        $user = Auth::user();


        return View::make('user.index')

            ->with('user', $user);


    }

    public function edit()
    {
        $user = Auth::user();

        return View::make('user.edit')

            ->with('user', $user);

    }


    public function update()
    {

        $user = Auth::user();


        if (!$user->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('UserController@index');


    }


}