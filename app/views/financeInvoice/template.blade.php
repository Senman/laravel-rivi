<style>

    th {
        background-color: #efefef;

    }

    .special-heading {

        background-color: #333;
        color: #ffffff;

    }

</style>


<table class="table table-bordered">

    <tr>

        <td style="width: 60%" class="special-heading">
            <h2> Faktura - danový doklad </h2>

        </td>

        <td style="text-align: right">
            <h3>Číslo: </h3>

        </td>

        <td>
            <h3>{{ $invoice->pre_year.$invoice->year.$invoice->pre_number.sprintf("%03d",$invoice->number)
                }} </h3>

        </td>

    </tr>

</table>


<table class="table table-bordered">
    <tr>
        <th style="width: 50%">
            Dodavatel

        </th>


        <th>
            Odběratel

        </th>

    </tr>

    <tr>
        <td>

            <h4> {{$invoice->home_name }} </h4>

            <p>{{$invoice->home_street }} <br>
                {{$invoice->home_zip }}

                {{$invoice->home_city }} <br>

                {{$invoice->home_country }}
            </p>

            <p>
                IČ: {{$invoice->home_id }} <br>
                DIČ: {{$invoice->home_vid }}
            </p>

        </td>

        <td>

            <h4> {{$invoice->company_name }} </h4>

            <p> {{$invoice->company_street }} <br>
                {{$invoice->company_zip }}

                {{$invoice->company_city }} <br>
                {{$invoice->company_country }}

            </p>

            <p>
                IČ: {{$invoice->company_num }} <br>
                DIČ: {{$invoice->company_vat_num }}
            </p>
        </td>
    </tr>


</table>


<h2>Platební podmínky</h2>

<table class="table table-bordered">
    <tr>
        <th style="width: 25%">

            Forma úhrady

        </th>
        <td style="width: 25%">
            {{$invoice->payment_type }}

        </td>


        <th style="width: 25%">


        </th>
        <td style="width: 25%">


        </td>


    </tr>

    <tr>
        <th>

            Bankovní spojení

        </th>
        <td>
            Raiffeisen

        </td>

        <th>

            Datum vystavení

        </th>
        <td>
            {{$invoice->date_issued }}


        </td>


    </tr>


    <tr>
        <th>

            Číslo účtu

        </th>
        <td>
            <strong>
                {{$invoice->account }}
            </strong>
        </td>

        <th>

            Datum zdanitel. plnění

        </th>
        <td>
            {{$invoice->date_vat }}


        </td>


    </tr>


    <tr>
        <th>

            Variabilní symbol

        </th>
        <td>
            <strong> {{$invoice->symbol_variable }}
            </strong>
        </td>

        <th>

            Datum splatnosti

        </th>
        <td>
            <strong> {{$invoice->due_date }}
            </strong>

        </td>


    </tr>


</table>


<h2>Fakturované položky</h2>


<table class="table table-bordered">
    <thead>


    <tr>


        <th style="width: 30%">Název</th>

        <th style="text-align: center">Množství</th>
        <th style="text-align: right">Jednotková cena <br>[bez DPH]</th>

        <th style="text-align: right">Celková cena <br>[bez DPH]</th>
        <th style=" text-align: right">DPH</th>


        <th style="text-align: right">Celková cena <br> [včetně DPH]</th>
    </tr>


    </thead>
    <tbody>

    @foreach($invoice->items as $item)

    <tr>


        <td>
            {{$item->description}}

        </td>


        <td style="text-align: center">
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
            {{ number_format($item->count * $item->price * (( 100 + $item->vat) / 100 ) , 2,',',' ') }}
            Kč

        </td>


    </tr>

    @endforeach
    </tbody>

</table>


<div class="row">
    <div class="col-md-6">
        <p>{{$invoice->description }} </p>

    </div>
    <div class="col-md-6">
        <table class="table table-bordered">
            <tr>
                <th style="width: 50%">
                    Základ pro DPH
                </th>

                <td style="text-align: right">
                    {{ number_format( $invoice->priceTotal, 2,',',' ') }}
                    {{$invoice->currency}}
                </td>


            </tr>


            <!--            <tr>
                            <th>
                                Sazba DPH
                            </th>

                            <td style="text-align: right">
                                {{ $invoice->vat }}
                                %

                            </td>


                        </tr>-->

            <tr>
                <th>
                    Částka DPH
                </th>

                <td style="text-align: right">
                    {{ number_format($invoice->vatTotal , 2,',',' ') }}
                    {{$invoice->currency}}
                </td>


            </tr>

            <tr>
                <th>
                    Cena s DPH
                </th>

                <td style="text-align: right">
                    <strong>

                        {{ number_format($invoice->priceVatTotal, 2,',',' ') }}
                        {{$invoice->currency}}

                    </strong>
                </td>


            </tr>

        </table>

    </div>
</div>

Vystavil: {{$invoice->created_by }}

<hr>
<small>
    SENMAN s.r.o. <br>
    Jugoslavskych Partyzanu 1580/3 <br>
    160 00 Prague 6
    Czech Republic
</small>


