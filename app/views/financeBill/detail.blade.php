@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                Platby


            </h1>


        </div>

        <div class="col-md-3">


            {{ link_to_action('FinanceBillController@index', 'Zpět', null , array('class' => 'btn
            btn-default btn-block')) }}

            <br/>

            @include('financeBill.buttons' , array('bill'=>$bill))


        </div>

    </div>

    <div class="row ">


        <div class="col-md-9">

            <table class="table table-bordered">
                <tr>
                    <th style="width: 50%">
                        Name
                    </th>
                    <td>
                        {{ $bill->name }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->date_issued }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->due_date }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->date_vat }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->name }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->income }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->outcome }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->vat }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->payment_type }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->created_by }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->type }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->note }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->date_paid }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->paid_by }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->created_at }}
                    </td>
                </tr>
                <tr>

                    <th>
                        Name
                    </th>
                    <td>
                        {{ $bill->updated_at }}

                    </td>
                </tr>


        </div>

    </div>

</div>


@stop