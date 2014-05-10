@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>


                Administrace společností


            </h1>


        </div>

        <div class="col-md-3">


            {{ link_to_action('FinanceCompanyController@create', 'Nova spolecnost',null, $attributes = array('class'
            => 'btn btn-success btn-block' ) )}}

            <br />

        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">

            @include('financeCompany.table' , array('companies'=>$companies))



        </div>




    </div>

</div>


@stop