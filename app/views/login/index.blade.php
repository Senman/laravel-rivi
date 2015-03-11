@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-6 col-md-offset-3">


            <h1>{{ trans('messages.user.login') }}</h1>


            {{ Form::open(array('action'=>array('LoginController@auth'))) }}

            @include('login.form' )

            {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block'))}}


            {{ Form::close() }}

        </div>

    </div>

</div>

@stop