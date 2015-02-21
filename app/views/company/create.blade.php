@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                {{ trans('messages.company.create') }}


            </h1>



            {{Form::model($company, array('action' => array('CompanyController@save'))) }}


            @include('company.form' , array('company'=>$company))


            <button type="submit" class="btn btn-default">{{ trans('messages.submit') }}</button>


            {{ Form::close() }}


        </div>

    </div>

</div>



@stop