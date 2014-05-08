@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">

        <div class="col-md-9">


            {{$budget->name}}

        </div>

        <div class="col-md-3">


            @include('financeBudget.buttons')


        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">



            @include('financeBudgetItem.table' , array('budgetItems'=>$budgetItems))


        </div>


    </div>


    <div class="row">

        <div class="col-md-9">


        </div>

    </div>

</div>

@stop