@extends('layouts.master')


@section('content')


<div class="container">

    <div class="row ">

        <div class="col-md-9">


            <h1>

                {{ trans('messages.users') }} </h1>

        </div>
        <div class="col-md-3">


            {{ link_to_action('AdminUserController@create', trans('messages.new.employee'), null, array('class' => 'btn btn-success btn-block') )}}


            <br/>

        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">
            @include('adminUser.table' , array('users'=>$users))


        </div>


    </div>

</div>


@stop