@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                {{ trans('messages.edit.employee') }}


            </h1>


            {{Form::model($user, array('action' => array('AdminUserController@update', $user->id))) }}


            @include('adminUser.form' , array('user'=>$user))


            <button type="submit" class="btn btn-default">{{ trans('messages.submit') }}</button>


            {{ Form::close() }}
        </div>

    </div>

</div>


@stop