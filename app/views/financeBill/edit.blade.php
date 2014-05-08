@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                Editovat platbu


            </h1>



            {{Form::model($bill, array('action' => array('FinanceBillController@update',  $bill->id))) }}


            @include('financeBill.form' , array('bill'=>$bill))


            <button type="submit" class="btn btn-default">Submit</button>


            {{ Form::close() }}


        </div>

    </div>

</div>



@stop