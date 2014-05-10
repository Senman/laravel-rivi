@extends('layouts.master')

@section('content')



<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                Učty


            </h1>


        </div>

        <div class="col-md-3">


            {{ link_to_action('FinanceAccountController@create', 'Novy ',null, $attributes = array('class'
            => 'btn btn-success btn-block' ) )}}

            <br />

        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">


            <hr>

            @include('financeAccount.table' , array('accounts'=>$accounts))


        </div>

    </div>

</div>





@stop