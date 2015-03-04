@extends('layouts.print')

@section('content')


@include('invoice.template_'.$invoice->language )

@stop