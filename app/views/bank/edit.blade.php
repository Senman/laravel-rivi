@extends('layouts.master')

@section('content')

<div class="container">




<h1>
<p class="text-center">{{ trans('messages.edit') }}</p>
</h1>            


			<div class="row">
  			<div class="col-md-6 col-md-offset-3">

            {{Form::model($bank, array('action' => array('BankController@update',  $bank->id))) }}


            @include('bank.form' , array('bank'=>$bank))


            <button type="submit" class="btn btn-default">{{ trans('messages.submit') }}</button>

			</div>
            {{ Form::close() }}

			</div>
    


</div>



@stop