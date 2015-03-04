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



            @include('invoicePrint.template_'.$invoice->language )

        </div>


        <div class="col-md-3">

            {{ link_to_action('InvoiceController@index', trans('messages.back'), null , array('class' => 'btn
            btn-default btn-block')) }}

            <br/>

            @include('invoice.buttons')



    </div>


</div>

@stop