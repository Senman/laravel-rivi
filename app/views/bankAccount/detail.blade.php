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


            {{ link_to_action('BankAccountController@index', trans('messages.back'), null , array('class' => 'btn
            btn-default btn-block')) }}

            <br/>

            @include('bankAccount.buttons' , array('bankAccount'=>$bankAccount))


        </div>

    </div>

    <div class="row ">


        <div class="col-md-9">

            <table class="table table-bordered">
                <tr>
                    <th style="width: 50%">
                        {{ trans('messages.bankAccount.name') }}
                    </th>
                    <td>
                        {{ $bankAccount->name }}
                    </td>
                </tr>


                <tr>
                    <th style="width: 50%">
                        {{ trans('messages.bankAccount.number') }}
                    </th>
                    <td>
                        {{ $bankAccount->number }}
                    </td>
                </tr>


                <tr>
                    <th style="width: 50%">
                        {{ trans('messages.iban') }}
                    </th>
                    <td>
                        {{ $bankAccount->iban }}
                    </td>
                </tr>


                <tr>
                    <th style="width: 50%">
                        {{ trans('messages.swift') }}
                    </th>
                    <td>
                        {{ $bankAccount->swift }}
                    </td>
                </tr>



                <tr>
                    <th style="width: 50%">
                        {{ trans('messages.bank.name') }}
                    </th>
                    <td>
                        {{ $bankAccount->bankName }}
                    </td>
                </tr>


        </div>

    </div>

</div>


@stop