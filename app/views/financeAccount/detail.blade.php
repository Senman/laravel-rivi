@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                Platby


            </h1>


        </div>

        <div class="col-md-3">


            {{ link_to_action('FinanceAccountController@index', 'Zpět', null , array('class' => 'btn
            btn-default btn-block')) }}

            <br/>

            @include('financeAccount.buttons' , array('account'=>$account))


        </div>

    </div>

    <div class="row ">


        <div class="col-md-9">

            <table class="table table-bordered">
                <tr>
                    <th style="width: 50%">
                        Name
                    </th>
                    <td>
                        {{ $account->name }}
                    </td>
                </tr>


                <tr>
                    <th style="width: 50%">
                        Cislo uctu
                    </th>
                    <td>
                        {{ $account->number }}
                    </td>
                </tr>


                <tr>
                    <th style="width: 50%">
                        IBAN
                    </th>
                    <td>
                        {{ $account->iban }}
                    </td>
                </tr>


                <tr>
                    <th style="width: 50%">
                        SWIFT
                    </th>
                    <td>
                        {{ $account->swift }}
                    </td>
                </tr>



                <tr>
                    <th style="width: 50%">
                        Nazev banky
                    </th>
                    <td>
                        {{ $account->bankName }}
                    </td>
                </tr>


        </div>

    </div>

</div>


@stop