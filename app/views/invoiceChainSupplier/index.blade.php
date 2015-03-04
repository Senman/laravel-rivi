@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>


                {{ trans('messages.supplier') }}

                DODAVATEL

            </h1>


        </div>

        <div class="col-md-3">


        </div>

    </div>


    @include('layouts.chain' , array('complete'=>['complete','complete','active','disabled','disabled','disabled' ] ))


    @include('invoiceChainSupplier.searchForm')



    <div class="row ">


        <div class="col-md-12">

            @include('invoiceChainSupplier.table' , array('companies'=>$companies))



        </div>




    </div>

</div>


@stop