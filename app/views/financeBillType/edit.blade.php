@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                Editovat


            </h1>



            {{Form::model($billType, array('action' => array('FinanceBillTypeController@update',  $billType->id))) }}


            @include('financeBillType.form' , array('billType'=>$billType))


            <button type="submit" class="btn btn-default">Submit</button>


            {{ Form::close() }}


        </div>

    </div>

</div>



@stop