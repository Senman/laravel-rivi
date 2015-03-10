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


    @include('layouts.chain' , array('complete'=>['complete','complete','complete','complete','active','disabled' ] ))



    <div class="row ">
        <div class="col-md-12">
            {{Form::model($invoice, array('action' => array('InvoiceChainDetailController@save', $invoice->id))) }}


            @include('invoiceChainDetail.form' )



            <button type="submit" class="btn btn-default">{{ trans('messages.submit') }}</button>

            {{ Form::close() }}


        </div>





    </div>

</div>



@stop


