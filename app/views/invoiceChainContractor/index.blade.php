@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>


                {{ trans('messages.invoice.choose.contractor') }}

                ODBERATEL
            </h1>


        </div>

        <div class="col-md-3">


        </div>

    </div>


    @include('layouts.chain' , array('complete'=>['complete','active','disabled','disabled','disabled','disabled' ] ))


    @include('invoiceChainContractor.searchForm')


    <div class="row ">


        <div class="col-md-12">


            @include('invoiceChainContractor.table' , array('companies'=>$companies))

        </div>


    </div>

</div>


@stop