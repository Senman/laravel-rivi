@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                Editovat spolecnost


            </h1>



            {{Form::model($invoice, array('action' => array('FinanceInvoiceController@update', $invoice->id))) }}




            @include('financeInvoice.form' , array('invoice'=>$invoice))


            <button type="submit" class="btn btn-default">Submit</button>


            {{ Form::close() }}
        </div>

    </div>

</div>



@stop