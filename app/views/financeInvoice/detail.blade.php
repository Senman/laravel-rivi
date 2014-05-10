@extends('layouts.master')

@section('content')

<style>

    th {
        background-color: #efefef;

    }

    .special-heading {

        background-color: #333;
        color: #ffffff;

    }
</style>


<div class="container">

    <div class="row ">

        <div class="col-md-9">


            <h1>{{$invoice->name }}  <small>@include('layouts.invoiceState' , array('state'=>$invoice->state)) </small>  </h1>

            <hr>

            @include('financeInvoice.template')

        </div>



        <div class="col-md-3">

            {{ link_to_action('FinanceInvoiceController@index', 'Zpět', null , array('class' => 'btn
            btn-default btn-block')) }}

            <br/>

            @include('financeInvoice.buttons')


        </div>

    </div>


</div>

@stop