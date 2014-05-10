@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                Vložit platbu


            </h1>



            {{Form::model($bill, array('action' => array('FinanceBillController@save') , 'files' => true )) }}


            @include('financeBill.form' , array('bill'=>$bill))


            <div class="row">
                <div class="col-md-5">


                    <div class="form-group">
                        <label for="income">Příjem </label>


                        {{ Form::text('income' , null, array( 'class' => 'form-control')) }}

                    </div>
                </div>
                <div class="col-md-5">


                    <div class="form-group">
                        <label for="outcome">Výdaj </label>


                        {{ Form::text('outcome' , null, array( 'class' => 'form-control')) }}

                    </div>
                </div>
                <div class="col-md-2">

                    <div class="form-group">
                        <label for="vat">vat </label>


                        {{ Form::text('vat' , null, array( 'class' => 'form-control')) }}

                    </div>

                </div>
            </div>


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
                <label for="payment_type">Rozpočet </label>


                {{ Form::select('_budget_item', $budgetItemSelect , Input::old('bill_type') , array( 'class' =>
                'form-control')) }}


            </div>


            <div class="form-group">
                <label for="note">Poznámka </label>


                {{ Form::textarea('note' , null, array( 'class' => 'form-control')) }}

            </div>


            <div class="form-group">
                <label for="description">Nahrát soubor </label>
                {{ Form::file('_file', array( 'class' => 'form-control')) }}

            </div>


            <button type="submit" class="btn btn-default">Submit</button>


            {{ Form::close() }}


        </div>

    </div>

</div>



@stop