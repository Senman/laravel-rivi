@extends('layouts.print')

@section('content')


@include('financeInvoice.template_'.$invoice->language )

@stop