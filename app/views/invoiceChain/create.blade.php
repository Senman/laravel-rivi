@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-2">


        </div>


        <div class="col-md-8">


            <h1>


                {{ trans('messages.invoice.choose.language') }}


            </h1>


        </div>

        <div class="col-md-2">


        </div>

    </div>


    @include('layouts.chain' , array('complete'=>['active','disabled','disabled','disabled','disabled','disabled' ] ))

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {{Form::open(array('action' => array('InvoiceChainController@save'))) }}


            @include('invoiceChain.form' )

            <button type="submit" class="btn btn-default">{{ trans('messages.submit') }}</button>


            {{ Form::close() }}


        </div>
    </div>


</div>


@stop