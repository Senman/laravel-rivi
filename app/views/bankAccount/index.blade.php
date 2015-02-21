@extends('layouts.master')

@section('content')



<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                {{ trans('messages.bankAccounts') }}


            </h1>


        </div>

        <div class="col-md-3">


            {{ link_to_action('BankAccountController@create', trans('messages.new'),null, $attributes = array('class'
            => 'btn btn-success btn-block' ) )}}

            <br />

        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">


            <hr>

            @include('bankAccount.table' , array('bankAccounts'=>$bankAccounts))


        </div>

    </div>

</div>





@stop