@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                Editovat


            </h1>



            {{Form::model($account, array('action' => array('FinanceAccountController@update',  $account->id))) }}


            @include('financeAccount.form' , array('account'=>$account))


            <button type="submit" class="btn btn-default">Submit</button>


            {{ Form::close() }}


        </div>

    </div>

</div>



@stop