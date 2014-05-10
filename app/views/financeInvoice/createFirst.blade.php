@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>


             Vyberte společnost pro fakturaci


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