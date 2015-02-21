@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">

        <div class="col-md-8">

            <h1>
                Editovat zaměstnance
            </h1>
            {{Form::model($user, array('action' => array('UserController@update', $user->id))) }}

            @include('user.form' , array('user'=>$user))


            <button type="submit" class="btn btn-default">Submit</button>

            {{ Form::close() }}
        </div>

    </div>

</div>


@stop