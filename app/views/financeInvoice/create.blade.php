@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-12">


            <h1>
                Vytvořit fakutru


            </h1>


        </div>

    </div>
    <div class="row ">
        <div class="col-md-9">
            {{Form::model($invoice, array('action' => array('FinanceInvoiceController@save'))) }}


            @include('financeInvoice.form' , array('invoice'=>$invoice))


            <button type="submit" class="btn btn-default">Submit</button>


            <select  class="ajax">
                <option value="http://senman.cz">One</option>
                <option value="http://Test.com">Two</option>
            </select>

            <div id="company">

                </div>

            {{ Form::close() }}

        </div>





    </div>

</div>



@stop


