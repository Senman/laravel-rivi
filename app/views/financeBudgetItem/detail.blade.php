@extends('layouts.master')

@section('content')


<div class="container-fluid">

    <div class="row ">

        <div class="col-md-9">


         <h1>  <small> {{$budgetItem->budget->name}} </small>
             <br>
             {{$budgetItem->name}}
         </h1>

        </div>

        <div class="col-md-3">


            {{ link_to_action('FinanceBudgetController@detail', 'Zpět', $budgetItem->budget->id, array('class' => 'btn
            btn-default btn-block')) }}
            <br/>


            @include('financeBudgetItem.buttons')


        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">

             <hr>

            @include('financeBill.table', array('bills' => $budgetItem->bills ))
        </div>


    </div>




</div>

@stop