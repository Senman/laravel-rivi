@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                <small> {{ trans('messages.company.detail') }}</small>
                <br>
                {{$company->name}}


            </h1>


        </div>


        <div class="col-md-3">

            {{ link_to_action('CompanyController@index', trans('messages.back'), null , array('class' => 'btn
            btn-default btn-block')) }}

            <br/>


            @include('company.buttons')

            <br/>

        </div>


    </div>


    <div class="row ">


        <div class="col-md-12">

            <hr>

        </div>


    </div>


    <div class="row ">


        <div class="col-md-7">

            <table class="table table-bordered">
                <tbody>

                <tr>

                    <th>trans('messages.address')</th>

                    <td>
                        {{$company->street}} <br>
                        {{$company->zip}}, {{$company->city}} <br>
                        {{$company->country}}

                    </td>

                </tr>
                <tr>
                    <th>trans('messages.bank.information')</th>

                    <td>
                        {{$company->bankName}} <br>
                        {{$company->bankAccount}}

                    </td>

                </tr>
                <tr>
                    <th>trans('messages.contact')</th>

                    <td>
                        {{$company->telephone}} <br>
                        {{$company->email}}

                    </td>

                </tr>

                <tr>
                    <th>trans('messages.cid')</th>

                    <td>
                        {{$company->cid}}

                    </td>

                </tr>

                <tr>
                    <th>trans('messages.vatid')</th>

                    <td>

                        {{$company->vatid}}
                    </td>

                </tr>

                </tbody>

            </table>


        </div>


    </div>


    <div class="row ">


        <div class="col-md-12">

        </div>


    </div>
</div>


@stop