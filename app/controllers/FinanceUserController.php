<?php

class FinanceUserController extends BaseController
{

    public function index()
    {
        $users = User::all();
        return View::make('financeUser.index')->with('users', $users);
    }


    public function create()
    {
        $user = new User();

        return View::make('financeUser.create')
            ->with('user', $user);
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->firstOrFail();

        return View::make('financeUser.edit')

            ->with('user', $user);

    }


    public function update($id)
    {

        $user = User::where('id', $id)->firstOrFail();


        $user->username = Input::get('username');

        if (!$user->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('FinanceUserController@index');


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
            Session::flash('message', 'Uživatelksé jméno je již použito');
            return Redirect::back()->withInput();
        }


        if (!$user->save()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Uživatel vytvořen');
        return Redirect::action('FinanceUserController@index');


    }


    public function delete()
    {

        $id = Input::get('id');
        $user = User::find($id);


        if (!$user->delete()) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }

        Session::flash('message', 'Successfully deleted!');
        return Redirect::action('FinanceUserController@index');


    }

    public function detail($id)
    {


        $user = User::where('id' , $id)->firstOrFail();

       // $timeLogs = $user->timeLogs()->orderBy('date', 'desc')->get();


        return View::make('financeUser.detail')

            ->with('user', $user);//->with('timeLogs', $timeLogs);


    }

}
