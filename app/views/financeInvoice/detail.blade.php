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


            <h1>{{$invoice->name }}

                <br>

                <small>

                    {{ $invoice->pre_year.$invoice->year.$invoice->pre_number.sprintf("%03d",$invoice->number)
                    }}
                </small>

            </h1>


            @include('layouts.invoiceState' , array('state'=>$invoice->state))

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