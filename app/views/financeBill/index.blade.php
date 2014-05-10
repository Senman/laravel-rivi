@extends('layouts.master')

@section('content')



<div class="container-fluid">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                Platby


            </h1>


        </div>

        <div class="col-md-3">


            {{ link_to_action('FinanceBillController@create', 'Nova platba',null, $attributes = array('class'
            => 'btn btn-success btn-block' ) )}}

            <br />

        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">

            <hr>


            @include('financeBill.table' , array('bills'=>$bills))


            {{ $bills->links() }}


        </div>

    </div>

</div>





@stop