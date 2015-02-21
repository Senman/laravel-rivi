@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                <small> {{ trans('messages.employee.detail') }}</small>
                <br>
                {{$user->firstName}}

                {{$user->lastName}}

            </h1>


        </div>


        <div class="col-md-3">

            {{ link_to_action('AdminUserController@index', trans('messages.back'), null , array('class' => 'btn
            btn-default btn-block')) }}

            <br/>


            @include('adminUser.buttons')

            <br/>

        </div>


    </div>


    <div class="row ">


        <div class="col-md-12">

            @include('adminUser.personalDetail')
        </div>


    </div>










    </div>
</div>


@stop