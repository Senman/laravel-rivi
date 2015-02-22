@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>


                {{ trans('messages.invoice.choose.contractor') }}


            </h1>


        </div>

        <div class="col-md-3">


        </div>

    </div>





    <div class="row ">


        <div class="col-md-12">

            @include('invoice.companyTable' , array('companies'=>$companies))


        </div>


    </div>

</div>


@stop