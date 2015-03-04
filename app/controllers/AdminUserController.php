<?php

class AdminUserController extends BaseController
{

    public function index()
    {
        $users = User::all();
        return View::make('adminUser.index')->with('users', $users);
    }


    public function create()
    {
        $user = new User();

        return View::make('adminUser.create')
            ->with('user', $user);
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->firstOrFail();

        return View::make('adminUser.edit')

            ->with('user', $user);

    }


    public function update($id)
    {

        $user = User::where('id', $id)->firstOrFail();


        $user->username = Input::get('username');

        if (!$user->update(Input::all())) {
            Session::flash('error', trans('message.adminUser.update.error') );
            return Redirect::back()->withInput();
        }
        Session::flash('message', trans('messages.adminUser.update.success'));
        return Redirect::action('AdminUserController@index');


    }


    public function save()
    {

        $user = new User(Input::all());

        $user->username = Input::get('username');

        $password = str_random(6); // mt_rand(); //Input::get('password');
       // $passwordConfirm = $password; //Input::get('passwordConfirm');


        $user->password = Hash::make($password);
                                      /*
        if ($password != $passwordConfirm) {
            Session::flash('message', 'Hesla nesouhlasí');
            return Redirect::back()->withInput();
        }

        if (strlen($password) < 6) {
            Session::flash('message', 'Heslo je prilis kratke');
            return Redirect::back()->withInput();

        }                                */

        if (User::where('username', '=', $user->username)->count() > 0) {
            Session::flash('error', trans('messages.adminUser.save.name.used'));
            return Redirect::back()->withInput();
        }


        if (!$user->save()) {
            Session::flash('error', trans('message.adminUser.save.error') );
            return Redirect::back()->withInput();
        }

        Session::flash('message', trans('messages.adminUser.save.success'));
        return Redirect::action('AdminUserController@index');


    }


    public function delete()
    {

        $id = Input::get('id');
        $user = User::find($id);


        if (!$user->delete()) {
            Session::flash('error', trans('message.adminUser.delete.error') );
            return Redirect::back();
        }

        Session::flash('message', trans('messages.adminUser.delete.success'));
        return Redirect::action('AdminUserController@index');


    }

    public function detail($id)
    {


        $user = User::where('id' , $id)->firstOrFail();

       // $timeLogs = $user->timeLogs()->orderBy('date', 'desc')->get();


        return View::make('adminUser.detail')

            ->with('user', $user);//->with('timeLogs', $timeLogs);


    }

}
