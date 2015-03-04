<?php

class UserPasswordController extends BaseController
{


    public function edit()
    {
        $user = Auth::user();



        return View::make('userPassword.edit')->with('user', $user);

    }

    public function update()
    {
        $user = Auth::user();


        $password = Input::get('password');
        $passwordConfirm = Input::get('passwordConfirm');


        if ($password != $passwordConfirm) {
            Session::flash('error', trans('message.userPassword.update.password.different') );
            return Redirect::back()->withInput();
        }

        if (strlen($password) < 6) {
            Session::flash('error', trans('message.userPassword.update.password.short') );
            return Redirect::back()->withInput();

        }


       //  $password = array('password', Hash::make($password));
        $user->password = Hash::make($password);


        if (!$user->update()) {
            Session::flash('error', trans('message.userPassword.update.error') );
            return Redirect::back()->withInput();
        }
        Session::flash('message', trans('messages.userPassword.update.success'));
        return Redirect::action('UserController@index');


    }

}