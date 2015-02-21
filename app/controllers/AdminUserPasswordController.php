<?php

class AdminUserPasswordController extends BaseController
{


    public function edit($id)
    {

        $user = User::where('id',$id)->firstOrFail();


        return View::make('adminUserPassword.edit')->with('user', $user);

    }

    public function update($id)
    {

        $user = User::where('id',$id)->firstOrFail();


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
        return Redirect::action('AdminUserController@index');


    }

}