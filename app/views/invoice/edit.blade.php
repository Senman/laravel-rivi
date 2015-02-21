@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                trans('messages.edit.invoice')

                <small>

                    {{ $invoice->pre_year.$invoice->year.$invoice->pre_number.sprintf("%03d",$invoice->number) }}

                </small>


            </h1>


            <hr>

            {{Form::model($invoice, array('action' => array('FinanceInvoiceController@update', $invoice->id))) }}




            @include('financeInvoice.form' , array('invoice'=>$invoice))


            <button type="submit" class="btn btn-default">trans('messages.submit')</button>


            {{ Form::close() }}
        </div>

    </div>

</div>



@stop