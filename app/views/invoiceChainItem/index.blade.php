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


    @include('layouts.chain' , array('complete'=>['complete','complete','complete','active','disabled','disabled' ] ))




    <div class="row ">
        <div class="col-md-12">
            {{Form::model($invoice, array('action' => array('InvoiceChainItemController@add', $invoice->id))) }}


            @include('invoiceChainItem.form' )







            {{ Form::close() }}

            @include('invoiceChainItem.table'    , array('items' => $invoice->invoiceItems) )


            {{ link_to_action('InvoiceChainDetailController@index', trans('messages.finish'), array($invoice->id),
            array('class' => 'btn btn-success')) }}

        </div>





    </div>

</div>



@stop


