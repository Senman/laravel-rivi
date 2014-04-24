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
            Session::flash('message', 'Hesla nesouhlasí');
            return Redirect::back()->withInput();
        }

        if (strlen($password) < 6) {
            Session::flash('message', 'Hesla je prilis kratke ');
            return Redirect::back()->withInput();

        }


       //  $password = array('password', Hash::make($password));
        $user->password = Hash::make($password);


        if (!$user->update()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('UserController@index');


    }

}