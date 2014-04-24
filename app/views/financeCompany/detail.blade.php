@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                <small> Detail společnosti</small>
                <br>
                {{$company->name}}


            </h1>


        </div>


        <div class="col-md-3">

            {{ link_to_action('AdminCompanyController@index', 'Zpět', null , array('class' => 'btn
            btn-default btn-block')) }}

            <br/>


            @include('adminCompany.buttons')

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

                    <th>Adresa</th>

                    <td>
                        {{$company->street}} <br>
                        {{$company->zip}}, {{$company->city}} <br>
                        {{$company->country}}

                    </td>

                </tr>
                <tr>
                    <th>Bankovní spojení</th>

                    <td>
                        {{$company->bankName}} <br>
                        {{$company->bankAccount}}

                    </td>

                </tr>
                <tr>
                    <th>Kontakt</th>

                    <td>
                        {{$company->telephone}} <br>
                        {{$company->email}}

                    </td>

                </tr>

                <tr>
                    <th>IČ</th>

                    <td>
                        {{$company->cid}}

                    </td>

                </tr>

                <tr>
                    <th>DIČ</th>

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

            @include('adminProject.table' , array('projects'=>$projects))


        </div>


    </div>
</div>


@stop