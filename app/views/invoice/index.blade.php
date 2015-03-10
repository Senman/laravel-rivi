@extends('layouts.master')

@section('content')



<div class="container-fluid">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                {{ trans('messages.invoices') }}


            </h1>


        </div>

        <div class="col-md-3">


            {{ link_to_action('InvoiceChainController@create', trans('messages.new.invoice') ,null, $attributes = array('class'
            => 'btn btn-success btn-block' ) )}}

            <br />

        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">

            <hr>


            @include('invoice.table' , array('invoices'=>$invoices))



            {{ $invoices->links() }}

        </div>

    </div>

</div>





@stop