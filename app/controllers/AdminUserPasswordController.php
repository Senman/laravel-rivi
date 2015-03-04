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
            Session::flash('error', trans('messages.adminUserPassword.update.password.different'));
            return Redirect::back()->withInput();
        }

        if (strlen($password) < 6) {
            Session::flash('error', trans('messages.adminUserPassword.update.password.short'));
            return Redirect::back()->withInput();
        }


        //  $password = array('password', Hash::make($password));
        $user->password = Hash::make($password);


        if (!$user->update()) {
            Session::flash('error', trans('message.adminUserPassword.update.error') );
            return Redirect::back()->withInput();
        }
        Session::flash('message', trans('messages.adminUserPassword.update.success'));
        return Redirect::action('AdminUserController@index');


    }

}