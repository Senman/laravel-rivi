@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                Editovat


            </h1>



            {{Form::model($budgetItem, array('action' => array('FinanceBudgetItemController@update',  $budgetItem->id))) }}


            @include('financeBudgetItem.form' , array('budgetItem'=>$budgetItem))


            <button type="submit" class="btn btn-default">Submit</button>


            {{ Form::close() }}


        </div>

    </div>

</div>



@stop