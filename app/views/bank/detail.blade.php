@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                {{ trans('messages.payments') }}


            </h1>


        </div>

        <div class="col-md-3">



            {{ link_to_action('BankController@index', trans('messages.back'), null , array('class' => 'btn
            btn-default btn-block')) }}

            <br/>

            {{ link_to_action('BankAccountController@create', trans('messages.new'), $bank->id  , $attributes = array('class'
            => 'btn btn-success btn-block' ) )}}


            <br/>

            @include('bank.buttons' , array('bank'=>$bank))


        </div>

    </div>

    <div class="row ">


        <div class="col-md-9">

            <table class="table table-bordered">
                <tr>
                    <th style="width: 50%">
                        {{ trans('messages.bank.name') }}
                    </th>
                    <td>
                        {{ $bank->name }}
                    </td>
                </tr>


                <tr>
                    <th style="width: 50%">
                        {{ trans('messages.bank.number') }}
                    </th>
                    <td>
                        {{ $bank->number }}
                    </td>
                </tr>


                <tr>
                    <th style="width: 50%">
                        {{ trans('messages.iban') }}
                    </th>
                    <td>
                        {{ $bank->iban }}
                    </td>
                </tr>


                <tr>
                    <th style="width: 50%">
                        {{ trans('messages.swift') }}
                    </th>
                    <td>
                        {{ $bank->swift }}
                    </td>
                </tr>



                <tr>
                    <th style="width: 50%">
                        {{ trans('messages.bank.name') }}
                    </th>
                    <td>
                        {{ $bank->bankName }}
                    </td>
                </tr>


        </div>

    </div>

</div>


@stop