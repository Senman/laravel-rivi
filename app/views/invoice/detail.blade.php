@extends('layouts.master')

@section('content')

<style>

    th {
        background-color: #efefef;

    }

    .special-heading {

        background-color: #333;
        color: #ffffff;

    }
</style>


<div class="container">

    <div class="row ">

        <div class="col-md-9">


            <h1>{{$invoice->name }}

                <br>

                <small>

                    {{ $invoice->pre_year.$invoice->year.$invoice->pre_number.sprintf("%03d",$invoice->number)
                    }}
                </small>

            </h1>


            @include('layouts.invoiceState' , array('state'=>$invoice->state))

            <hr>


            @include('financeInvoice.template_'.$invoice->language )

        </div>


        <div class="col-md-3">

            {{ link_to_action('FinanceInvoiceController@index', trans('messages.back'), null , array('class' => 'btn
            btn-default btn-block')) }}

            <br/>

            @include('financeInvoice.buttons')


            <table class="table-bordered table">
                <tr>

                    <td>
                        Zaplaceno

                    </td>
                    <td style="text-align: right">


                        {{ number_format($invoice->billsIncomeTotal , 2,',',' ') }}
                        {{$invoice->currency}}


                    </td>

                </tr>

                <tr>

                    <td>
                        trans('messages.left.to.pay')

                    </td>


                    <td style="text-align: right">


                        {{ number_format($invoice->priceVatTotal - $invoice->billsIncomeTotal , 2,',',' ') }}
                        {{$invoice->currency}}


                    </td>
                </tr>

            </table>

          <h4>trans('messages.payment.log')</h4>

            <table class="table-bordered table">


                <tr>

                    <th>trans('messages.date')</th>


                    <th>trans('messages.amount')</th>

                </tr>
                    @foreach($invoice->bills as $bill)

                <tr>

                    <td>{{$bill->date_paid}}</td>
                    <td style="text-align: right">

                        {{ number_format($bill->incomeTotal , 2,',',' ') }}
                        {{$bill->currency}} trans('messages.czk')
                    </td>

                </tr>

                @endforeach


            </table>


        </div>

    </div>


</div>

@stop