@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                Vytvořit rozpočet


            </h1>



            {{Form::model($budget, array('action' => array('FinanceBudgetController@save'))) }}


            @include('financeBudget.form' , array('budget'=>$budget))


            {{ Form::hidden('state' , 'new') }}

            <button type="submit" class="btn btn-default">Submit</button>


            {{ Form::close() }}


        </div>

    </div>

</div>



@stop