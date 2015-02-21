@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-12">


            <h1>
                {{ trans('messages.create.invoice') }}


            </h1>


        </div>

    </div>
    <div class="row ">
        <div class="col-md-9">
            {{Form::model($invoice, array('action' => array('FinanceInvoiceController@save'))) }}


            @include('financeInvoice.form' , array('invoice'=>$invoice))

            {{ Form::hidden('company_id' , $invoice->company->id) }}


            <button type="submit" class="btn btn-default">{{ trans('messages.submit') }}</button>



            <div id="company">

                </div>

            {{ Form::close() }}

        </div>





    </div>

</div>



@stop

