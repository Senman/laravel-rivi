@extends('layouts.master')

@section('content')



<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                {{ trans('messages.banks') }}


            </h1>


        </div>

        <div class="col-md-3">


            {{ link_to_action('BankController@create', trans('messages.bank.new'),null, $attributes = array('class'
            => 'btn btn-success btn-block' ) )}}

            <br />

        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">


            <hr>

            @include('bank.table' , array('banks'=>$banks))


        </div>

    </div>

</div>





@stop