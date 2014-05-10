@extends('layouts.master')

@section('content')


<div class="container-fluid">

    <div class="row ">

        <div class="col-md-9">


         <h1>   {{$budget->name}}  </h1>

        </div>

        <div class="col-md-3">



            {{ link_to_action('FinanceBudgetController@index', 'Zpět', null, array('class' => 'btn
            btn-default btn-block')) }}
            <br/>


            @include('financeBudget.buttons')


        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">


                  <hr>
            @include('financeBudgetItem.table' , array('budgetItems'=>$budgetItems))


        </div>


    </div>


    <div class="row">

        <div class="col-md-9">


        </div>

    </div>

</div>

@stop