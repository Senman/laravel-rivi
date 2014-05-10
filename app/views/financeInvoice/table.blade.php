<table class="table table-bordered">
    <thead>

    <tr>


    <tr>


        <th>Číslo</th>

        <th style="width: 20%">Název</th>


        <th>Firma</th>
        <th>vystaveno</th>

        <th>splatné</th>


        <th style="text-align: right">částka</th>

        <th style="text-align: right">stav</th>

        <th></th>
    </tr>


    </tr>

    </thead>
    <tbody>

    @foreach($invoices as $invoice)

    <tr
        class='<?

        if($invoice->due_date < date('Y-m-d') && $invoice->state == 'unpaid')
        {
            echo 'danger';
        }
        else if ( $invoice->state == 'paid' ) {

            echo 'success';
        }

        else if ( $invoice->state == 'storno' ) {

            echo 'default';
        }


        ?>'>

        <td>


            {{ $invoice->pre_year.$invoice->year.$invoice->pre_number.sprintf("%03d",$invoice->number) }}
        </td>

        <td>
            <strong>
            {{$invoice->name}}

                </strong>
        </td>


        <td>
            @if($invoice->company)
            {{ $invoice->company->name }}
            @endif

        </td>




        <td>
            {{$invoice->date_issued}}

        </td>

        <td>
            {{$invoice->due_date}}

        </td>





        <td style="text-align: right">
            {{ number_format($invoice->priceVatTotal , 2,',',' ') }}
            {{$invoice->currency}}

        </td>

        <td style="text-align: right">

        @include('layouts.invoiceState' , array('state'=>$invoice->state))


        </td>
        <td>

            {{ link_to_action('FinanceInvoiceController@detail', 'Detail', array($invoice->id),
            array('class' => 'btn btn-default btn-block')) }}

        </td>

    </tr>

    @endforeach

    </tbody>
</table>