<table class="table table-bordered">
    <thead>

    <tr>


    <tr>


        <th>Číslo</th>

        <th style="width: 20%">Název</th>


        <th>Firma</th>
        <th style="width: 10%">částka</th>
        <th>vystaveno</th>

        <th>splatné</th>


        <th></th>
    </tr>


    </tr>

    </thead>
    <tbody>

    @foreach($invoices as $invoice)

    <tr>
        <td>


            {{ $invoice->pre_year.$invoice->year.$invoice->pre_number.sprintf("%03d",$invoice->number) }}
        </td>

        <td>
            {{$invoice->name}}

        </td>


        <td>
            @if($invoice->company)
            {{$invoice->company->name}}
            @endif

        </td>


        <td>
            123123 {{$invoice->currency}}

        </td>

        <td>
            {{$invoice->date_issued}}

        </td>

        <td>
            {{$invoice->due_date}}

        </td>

        <td>

            {{ link_to_action('FinanceInvoiceController@detail', 'Detail', array($invoice->id),
            array('class' => 'btn btn-default btn-block')) }}

        </td>

    </tr>

    @endforeach

    </tbody>
</table>