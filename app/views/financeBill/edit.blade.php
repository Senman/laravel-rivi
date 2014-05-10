@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                Editovat platbu


            </h1>



            {{Form::model($bill, array('action' => array('FinanceBillController@update',  $bill->id))) }}


            @include('financeBill.form' , array('bill'=>$bill))



            <div class="form-group">
                <label for="payment_type">Zaučtováno jako </label>


                {{ Form::select('bill_type', $billTypes , Input::old('bill_type') , array( 'class' =>
                'form-control')) }}


            </div>


            <div class="form-group">
                <label for="payment_type">Způsob platby </label>


                {{ Form::select('payment_type', array('cash' => 'cash', 'card' => 'card', 'transfer' => 'transfer' ) , Input::old('payment_type') , array( 'class' =>
                'form-control')) }}


            </div>



            <div class="form-group">
                <label for="note">Poznámka </label>


                {{ Form::textarea('note' , null, array( 'class' => 'form-control')) }}

            </div>

            <button type="submit" class="btn btn-default">Submit</button>


            {{ Form::close() }}


        </div>

    </div>

</div>



@stop