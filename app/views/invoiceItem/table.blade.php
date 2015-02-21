<table class="table table-bordered">
    <thead>

    <tr>


    <tr>


        <th style="width: 30%">Název</th>

        <th style="text-align: right">Množství</th>
        <th style="text-align: right">Jednotková cena <br>[bez DPH]</th>

        <th style="text-align: right">Celková cena <br>[bez DPH]</th>
        <th style=" text-align: right">DPH</th>


        <th style="text-align: right">Celková cena <br> [včetně DPH]</th>

        <th></th>
    </tr>


    </tr>

    </thead>
    <tbody>
<?php

    $total = 0;

?>
    @foreach($items as $item)

    <tr>


        <td>
            {{$item->description}}

        </td>


        <td  style="text-align: right">
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

            {{ Form::open(array('action' => array('FinanceInvoiceController@remove'))) }}


            {{ Form::hidden('_method', 'POST') }}

            {{ Form::hidden('id', $item->id) }}
            {{ Form::submit('Odebrat', array('class' => 'btn btn-danger btn-block' , 'onclick' =>'return confirm("Are you sure?")' )) }}
            {{ Form::close() }}




        </td>

    </tr>

    @endforeach

    <tr>
        <td>
           <strong>  Celkem </strong>
        </td>

        <td>

        </td>

        <td>

        </td>


        <td style="text-align: right">
            {{ number_format($invoice->priceTotal , 2,',',' ') }}

            Kč
        </td>
        <td>

        </td>

        <td style="text-align: right">
            <strong>

            {{ number_format($invoice->priceVatTotal , 2,',',' ') }}

            Kč
            </strong>
        </td>

        <td>

        </td>
    </tr>


    </tbody>
</table>