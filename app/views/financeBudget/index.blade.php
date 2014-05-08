@extends('layouts.master')

@section('content')



<div class="container-fluid">

    <div class="row ">


        <div class="col-md-9">


            <h1>

              Rozpocet


            </h1>



        </div>

        <div class="col-md-3">


            {{ link_to_action('FinanceBudgetController@create', 'Novy rozpocet',null, $attributes = array('class'
            => 'btn btn-success btn-block' ) )}}

            <br />

        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">



            @include('financeBudget.table' , array('budgets'=>$budgets))


        </div>

    </div>

</div>





@stop