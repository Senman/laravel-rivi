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


            {{ link_to_action('FinanceBillTypeController@index', 'Zpět', null , array('class' => 'btn
            btn-default btn-block')) }}

            <br/>

            @include('financeBillType.buttons' , array('billType'=>$billType))


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
                        {{ $billType->name }}
                    </td>
                </tr>

                <tr>
                    <th style="width: 50%">
                        Skupina
                    </th>
                    <td>
                        {{ $billType->group }}
                    </td>
                </tr>

        </div>

    </div>

</div>


@stop