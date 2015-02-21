@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-12">


            <h1>
                {{ trans('messages.invoice.items') }}


            </h1>


        </div>

    </div>
    <div class="row ">
        <div class="col-md-12">
            {{Form::model($invoice, array('action' => array('InvoiceController@add'))) }}


            @include('invoiceItem.form' )




            {{ Form::hidden('invoice_id' , $invoice->id ) }}



            {{ Form::close() }}

            @include('invoiceItem.table'    , array('items' => $invoice->items) )


            {{ link_to_action('InvoiceController@createFinish', trans('messages.finish'), array($invoice->id),
            array('class' => 'btn btn-success')) }}

        </div>





    </div>

</div>



@stop


