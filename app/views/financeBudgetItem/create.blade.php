@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                Vytvořit rozpočtovou položku



            </h1>



            {{Form::model($budgetItem, array('action' => array('FinanceBudgetItemController@save'))) }}


            @include('financeBudgetItem.form' , array('budgetItem'=>$budgetItem))




                {{ Form::hidden('budget_id' , $budgetItem->budget->id ) }}




            <button type="submit" class="btn btn-default">Submit</button>


            {{ Form::close() }}


        </div>

    </div>

</div>



@stop