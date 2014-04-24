@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-8">


            <h1>
                Vytvořit spolecnost


            </h1>



            {{Form::model($company, array('action' => array('AdminCompanyController@save'))) }}


            @include('adminCompany.form' , array('company'=>$company))


            <button type="submit" class="btn btn-default">Submit</button>


            {{ Form::close() }}


        </div>

    </div>

</div>



@stop