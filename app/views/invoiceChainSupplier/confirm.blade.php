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


            @include('layouts.chain' , array('complete'=>['complete','complete','active','disabled','disabled','disabled' ] ))



            {{Form::model($invoice, array('action' => array('InvoiceChainSupplierController@save', $invoice->id))) }}


            @include('invoiceChainSupplier.form' , array('company'=> $company ))



                {{ Form::hidden('supplier_rsi' , $company->rsi) }}



            <button type="submit" class="btn btn-default">{{trans('messages.submit')}}</button>


            {{ Form::close() }}
        </div>

    </div>

</div>



@stop