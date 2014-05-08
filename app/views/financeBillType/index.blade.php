@extends('layouts.master')

@section('content')



<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                Platby


            </h1>


        </div>

        <div class="col-md-3">


            {{ link_to_action('FinanceBillTypeController@create', 'Nova ',null, $attributes = array('class'
            => 'btn btn-success btn-block' ) )}}

            <br />

        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">



            @include('financeBillType.table' , array('billTypes'=>$billTypes))


        </div>

    </div>

</div>





@stop