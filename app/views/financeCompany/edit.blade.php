@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                Editovat spolecnost


            </h1>


            {{Form::model($company, array('action' => array('FinanceCompanyController@update', $company->id))) }}




            @include('financeCompany.form' , array('company'=>$company))


            <button type="submit" class="btn btn-default">Submit</button>


            {{ Form::close() }}
        </div>

    </div>

</div>



@stop