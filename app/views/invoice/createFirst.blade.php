@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>


                {{ trans('messages.choose.company.for.invoice') }}


            </h1>


        </div>

        <div class="col-md-3">


        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">

            @include('financeInvoice.companyTable' , array('companies'=>$companies))



        </div>




    </div>

</div>


@stop