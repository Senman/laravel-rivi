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
            Session::flash('error', trans('message.user.update.error') );
            return Redirect::back()->withInput();
        }
        Session::flash('message', trans('messages.user.update.success'));
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
            Session::flash('error', trans('message.user.updateContact.error') );
            return Redirect::back()->withInput();
        }
        Session::flash('message', trans('messages.user.updateContact.success'));
        return Redirect::action('UserController@index');


    }


    public function detail($id)
    {
        $user = User::find($id);

        return View::make('user.index')
            ->with('user', $user);


    }
}