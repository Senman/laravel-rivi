@extends('layouts.master')

@section('content')

<div class="container">

<div class="row ">


    <div class="col-md-8">


        <h1>
            Editovat položky platby


        </h1>


    </div>

    <div class="col-md-4">


        {{ link_to_action('FinanceBillController@detail', 'Zpět',  $bill->id  , array('class' => 'btn
        btn-default btn-block')) }}

        <br/>


    </div>

</div>

<div class="row ">


    <div class="col-md-12">

        <hr>

        {{ Form::open(array('action' => array('FinanceBillController@addItem'))) }}

        {{ Form::hidden('bill_id', $bill->id ) }}

        <div class="row">
            <div class="col-md-3">

                <div class="form-group">
                    <label for="name">name </label>


                    {{ Form::text('pivot_name' , null, array( 'class' => 'form-control')) }}

                </div>

            </div>

            <div class="col-md-3">


                <div class="form-group">
                    <label for="payment_type">Rozpočet </label>


                    {{ Form::select('budget_item_id', $budgetItemSelect , Input::old('bill_type') , array( 'class' =>
                    'form-control')) }}


                </div>


            </div>

            <div class="col-md-2">

                <div class="form-group">
                    <label for="name">Příjem </label>


                    {{ Form::text('pivot_outcome' , null, array( 'class' => 'form-control')) }}

                </div>

            </div>

            <div class="col-md-2">

                <div class="form-group">
                    <label for="name">Výdaj </label>


                    {{ Form::text('pivot_income' , null, array( 'class' => 'form-control')) }}

                </div>

            </div>

            <div class="col-md-1">

                <div class="form-group">
                    <label for="name">DPH </label>


                    {{ Form::text('pivot_vat' , null, array( 'class' => 'form-control')) }}

                </div>

            </div>

            <div class="col-md-1">

                <div class="form-group">
                    <label for="name">&nbsp; </label>
                    <button type="submit" class="btn btn-success">Submit</button>

                </div>

            </div>
        </div>


        {{ Form::close() }}


        <table class="table table-bordered">
            <tr>

                <th>
                    Název
                </th>

                <th>
                    Rozpočet
                </th>

                <th>
                    Položka
                </th>

                <th>
                    Příjem
                </th>

                <th>
                    Výdaj
                </th>

                <th>
                    DPH
                </th>
            </tr>
            @foreach($bill->budgetItems as $budgetItems)
            <tr>
                <td>
                    {{$budgetItems->pivot->pivot_name}}
                </td>
                <td>
                    {{$budgetItems->budget->name}}
                </td>
                <td>
                    {{$budgetItems->name}}
                </td>
                <td style="text-align: right">

                    {{ number_format($budgetItems->pivot->pivot_income  , 2,',',' ') }}   Kč
                </td>
                <td style="text-align: right">

                    {{ number_format($budgetItems->pivot->pivot_outcome  , 2,',',' ') }}  Kč
                </td>
                <td>
                    {{ $budgetItems->pivot->pivot_vat }} %

                </td>

                <td>

                    {{ Form::open(array('action' => array('FinanceBillController@removeItem'))) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::hidden('id', $bill->id) }}
                    {{ Form::submit('Smazat',
                    array('class' => 'btn btn-danger btn-block', 'onclick' =>'return confirm("Are you sure?")' )) }}
                    {{ Form::close() }}

                </td>

            </tr>
            @endforeach


            <tr>

                <th colspan="3">
                    Celkem

                </th>

                <td style="text-align: right">

                    <strong>
                    {{ number_format($bill->incomeTotal  , 2,',',' ') }}


                    Kč
                    </strong>
                </td>

                <td style="text-align: right">
                    <strong>
                    {{ number_format($bill->outcomeTotal , 2,',',' ') }}

                    Kč
                    </strong>
                </td>

                <td></td>

                <td></td>
            </tr>


        </table>


    </div>

</div>

</div>


@stop