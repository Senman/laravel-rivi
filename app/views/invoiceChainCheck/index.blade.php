@extends('layouts.master')

@section('content')


<div class="container">



    @include('layouts.chain' , array('complete'=>['complete','complete','complete','complete','complete','active' ] ))


    @include('invoicePrint.template_'.$invoice->language )


    {{Form::open(array('action' => array('InvoiceChainCheckController@save', $invoice->id))) }}


    <button type="submit" class="btn btn-default">{{ trans('messages.submit') }}</button>


    {{ Form::close() }}




</div>


@stop