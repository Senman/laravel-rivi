<?php

class LoginController extends BaseController
{


    public function index()
    {

        return View::make('login.index');
    }


    public function auth()
    {


        $user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );

        if (!Auth::attempt($user)) {
            Session::flash('error', trans('message.login.auth.password.wrong') );
            return Redirect::action('LoginController@index')->withInput();
        }


        return Redirect::action('HomeController@index');


    }


}