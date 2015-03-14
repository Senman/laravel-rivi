@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                {{ trans('messages.bank.detail') }}


            </h1>


        </div>

        <div class="col-md-3">



            {{ link_to_action('BankController@index', trans('messages.back'), null , array('class' => 'btn
            btn-default btn-block')) }}

            <br/>

            {{ link_to_action('BankAccountController@create', trans('messages.bank.new'), $bank->id  , $attributes = array('class'
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
                        {{ $bank->account }}
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
                        {{ trans('messages.bank.branch') }}
                    </th>
                    <td>
                        {{ $bank->street }} {{ $bank->house_number }}, {{ $bank->zip}} {{ $bank->city}}<br>{{ $bank->country}}
                    </td>
                </tr>
                
                <tr>
                    <th style="width: 50%">
                        {{ trans('messages.bank.note') }}
                    </th>
                    <td>
                        {{ $bank->note }}
                    </td>
                </tr>

        </div>

    </div>

</div>


@stop