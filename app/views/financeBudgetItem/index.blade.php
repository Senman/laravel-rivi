@extends('layouts.master')

@section('content')



<div class="container-fluid">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                Rozpocet polozky


            </h1>



        </div>

        <div class="col-md-3">



            <br />

        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">



            @include('financeBudgetItem.table' , array('budgetItems'=>$budgetItems))


        </div>

    </div>

</div>





@stop