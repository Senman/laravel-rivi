@extends('layouts.master')

@section('content')


<div class="container">

<div class="row ">


<div class="col-md-9">


<h1>

    Platba  #{{ $bill->id }}


</h1>

<hr>

<table class="table table-bordered">
    <tr>
        <th style="width: 50%">
            Název
        </th>
        <td>
            <strong>{{ $bill->name }} </strong>
        </td>
    </tr>
    <tr>

        <th>
            Datum vystavení
        </th>
        <td>
            {{ $bill->date_issued }}
        </td>
    </tr>
    <tr>

        <th>
            Datum splatnosti
        </th>
        <td>
            {{ $bill->due_date }}
        </td>
    </tr>
    <tr>

        <th>
            Datum zdanitelneho plneni
        </th>
        <td>
            {{ $bill->date_vat }}
        </td>
    </tr>

</table>


    @include('financeBill.tableItem' , array('bill'=>$bill))




    <table class="table table-bordered">
    <tr>

        <th style="width: 50%">
            Celkem příjem
        </th>
        <td>

            {{ number_format($bill->incomeTotal , 2,',',' ') }}


            Kč
        </td>
    </tr>

    <tr>

        <th>
            Celkem výdaj
        </th>
        <td>
            {{ number_format($bill->outcomeTotal , 2,',',' ') }}


            Kč
        </td>
    </tr>


</table>








<table class="table table-bordered">


    <tr>


        <th style="width: 50%">

            Druh platby
        </th>
        <td>
            {{ $bill->payment_type }}
        </td>
    </tr>

    <tr>

        <th>
            Typ vydaje
        </th>
        <td>
            {{ $bill->bill_type }}
        </td>
    </tr>

</table>

<table class="table table-bordered">

    <tr>

        <th style="width: 50%">


            Platbu zadal
        </th>
        <td>
            {{ $bill->created_by }}
        </td>
    </tr>

    <tr>

        <th>
            Zaplaceno
        </th>
        <td> @if($bill->paid_by)
            {{ $bill->date_paid }}

            @endif
        </td>
    </tr>
    <tr>

        <th>
            Zaplatil
        </th>
        <td>

            @if($bill->paid_by)
            {{ $bill->paid_by }}

            @endif

        </td>
    </tr>


</table>

<table class="table table-bordered">

    <tr>

        <th style="width: 50%">


            Vytvořeno
        </th>
        <td>
            {{ $bill->created_at }}
        </td>
    </tr>
    <tr>

        <th>
            Změněno
        </th>
        <td>
            {{ $bill->updated_at }}

        </td>
    </tr>

    <tr>

        <th>
            Poznámka
        </th>
        <td>
            {{ $bill->note }}
        </td>
    </tr>

</table>


</div>


<div class="col-md-3">


    {{ link_to_action('FinanceBillController@index', 'Zpět', null , array('class' => 'btn
    btn-default btn-block')) }}

    <br/>

    @include('financeBill.buttons' , array('bill'=>$bill))

</div>

</div>
</div>


@stop