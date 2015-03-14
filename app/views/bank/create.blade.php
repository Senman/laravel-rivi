@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                {{ trans('messages.new.bank.account') }}


            </h1>



            {{Form::model($bank, array('action' => array('BankController@save'))) }}


            @include('bank.form' , array('bank'=>$bank))


            <button type="submit" class="btn btn-default">{{ trans('messages.submit') }}</button>


            {{ Form::close() }}


        </div>

    </div>

</div>



@stop