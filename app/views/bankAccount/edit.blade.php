@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                {{ trans('messages.edit') }}


            </h1>



            {{Form::model($bankAccount, array('action' => array('BankAccountController@update',  $bankAccount->id))) }}


            @include('bankAccount.form' , array('bankAccount'=>$bankAccount))


            <button type="submit" class="btn btn-default">{{ trans('messages.submit') }}</button>


            {{ Form::close() }}


        </div>

    </div>

</div>



@stop