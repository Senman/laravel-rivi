@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-12">


            <h1>
                Položky faktury


            </h1>


        </div>

    </div>
    <div class="row ">
        <div class="col-md-12">
            {{Form::model($invoice, array('action' => array('FinanceInvoiceController@add'))) }}


            @include('financeItem.form' )




            {{ Form::hidden('invoice_id' , $invoice->id ) }}



            {{ Form::close() }}

            @include('financeItem.table'    , array('items' => $invoice->items) )


            {{ link_to_action('FinanceInvoiceController@createFinish', 'Dokončit', array($invoice->id),
            array('class' => 'btn btn-success')) }}

        </div>





    </div>

</div>



@stop


