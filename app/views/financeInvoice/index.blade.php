@extends('layouts.master')

@section('content')



<div class="container-fluid">

    <div class="row ">


        <div class="col-md-9">


            <h1>

              Faktury


            </h1>


        </div>

        <div class="col-md-3">


            {{ link_to_action('FinanceInvoiceController@create', 'Nova faktura',null, $attributes = array('class'
            => 'btn btn-success btn-block' ) )}}

            <br />

        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">



            @include('financeInvoice.table' , array('invoices'=>$invoices))


        </div>

    </div>

</div>





@stop