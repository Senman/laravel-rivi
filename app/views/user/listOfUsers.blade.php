@extends('layouts.master')

@section('content')



<div class="container-fluid">

    <div class="row ">


        <div class="col-md-9">


            <h1>

              Uživatelé


            </h1>


        </div>

        <div class="col-md-3">

            TODO
            {{ link_to_action('FinanceInvoiceController@createFirst', 'Novy uzivatel',null, $attributes = array('class'
            => 'btn btn-success btn-block' ) )}}

            <br />

        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">

            <hr>


            @include('user.table' , array('users'=>$users))


        </div>

    </div>

</div>





@stop