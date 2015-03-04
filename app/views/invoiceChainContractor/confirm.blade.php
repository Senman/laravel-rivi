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



            @include('layouts.chain' , array('complete'=>['complete','active','disabled','disabled','disabled','disabled' ] ))



            {{Form::model($invoice, array('action' => array('InvoiceChainContractorController@save', $invoice->id))) }}



            <div class="col-md-6">
                <h3>Odběratel</h3>


                @include('invoiceChainContractor.form' , array('company'=> $company ))

            {{ Form::hidden('contractor_rsi' , $company->rsi) }}

                <button type="submit" class="btn btn-default">{{trans('messages.submit')}}</button>


            {{ Form::close() }}
        </div>

    </div>

</div>



@stop