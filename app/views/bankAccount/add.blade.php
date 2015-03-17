@extends('layouts.master')

@section('content')

<h1>Přidání bankovního účtu</h1>

            {{Form::open(array('action' => array('BankAccountController@saveBankAccount'))) }}


            @include('bankAccount.addform')
			{{ Form::hidden('_bank_id',$bank_id) }}

            <button type="submit" class="btn btn-default">Založit nový účet</button>


            {{ Form::close() }}
@stop