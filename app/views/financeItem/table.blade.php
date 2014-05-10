<table class="table table-bordered">
    <thead>

    <tr>


    <tr>


        <th style="width: 30%">Název</th>

        <th style="text-align: center">Množství</th>
        <th style="text-align: right">Jednotková cena <br>[bez DPH]</th>

        <th style="text-align: right">Celková cena <br>[bez DPH]</th>
        <th style=" text-align: right">DPH</th>


        <th style="text-align: right">Celková cena <br> [včetně DPH]</th>
    </tr>


    </tr>

    </thead>
    <tbody>
<?php



?>
    @foreach($items as $item)

    <tr>


        <td>
            {{$item->description}}

        </td>


        <td  style="text-align: center">
            {{$item->count}}

        </td>

        <td style="text-align: right">

            {{ number_format( $item->price , 2,',',' ') }}
            Kč

        </td>


        <td style="text-align: right">

            {{ number_format($item->count * $item->price , 2,',',' ') }}
            Kč

        </td>

        <td style="text-align: right">
            {{$item->vat}} %

        </td>

        <td style="text-align: right">
            {{ number_format($item->count * $item->price *  (( 100 + $item->vat) / 100 ) , 2,',',' ') }}
            Kč

        </td>

        <td>

            {{ link_to_action('FinanceInvoiceController@delete', 'Delete', array($item->id),
            array('class' => 'btn btn-danger btn-block')) }}

        </td>

    </tr>

    @endforeach

    <tr>
        <td>
             Celkem
        </td>


        <td>

        </td>


        <td>

        </td>


        <td>

        </td>


    </tr>


    </tbody>
</table>