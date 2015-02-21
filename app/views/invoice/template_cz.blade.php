<style>

    th {
        background-color: #efefef;

    }

    .special-heading {

        background-color: #333;
        color: #ffffff;

    }

</style>


<div id="content">


<table class="table table-bordered">

    <tr>

        <td style="width: 60%" class="special-heading">
            <h2 style="color: #ffffff"> Faktura - daňový doklad </h2>

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
            {{$invoice->bankName }}

        </td>

        <th>

            Datum vystavení

        </th>
        <td>



            {{ date("d. m. Y",strtotime($invoice->date_issued)) }}


        </td>


    </tr>


    <tr>
        <th>

            Číslo účtu

        </th>
        <td>

            {{$invoice->bankAccount }}

        </td>

        <th>

            Datum zdanitel. plnění

        </th>
        <td>

            {{ date("d. m. Y",strtotime($invoice->date_vat)) }}

        </td>


    </tr>


    <tr>
        <th>

            Variabilní symbol

        </th>
        <td>
            {{$invoice->symbol_variable }}

        </td>

        <th>

            Datum splatnosti

        </th>
        <td>

            {{ date("d. m. Y",strtotime($invoice->due_date)) }}



        </td>


    </tr>


</table>


<table class="table table-bordered">
    <thead>


    <tr>


        <th style="width: 50%">Název</th>

        <!--        <th style="text-align: center">Množství</th>
                <th style="text-align: right">Jednotková cena <br>[bez DPH]</th>-->

        <th style="text-align: right">Cena bez DPH</th>
        <th style=" text-align: right">DPH</th>


        <th style="text-align: right">Cena včetně DPH</th>
    </tr>


    </thead>
    <tbody>

    @foreach($invoice->items as $item)

    <tr>


        <td>
            {{$item->description}}

        </td>


        <!--  <td style="text-align: center">
              {{$item->count}}

          </td>

          <td style="text-align: right">

              {{ number_format( $item->price , 2,',',' ') }}
              Kč

          </td>-->


        <td style="width: 20%; text-align: right">

            {{ number_format($item->count * $item->price , 2,',',' ') }}
            {{$invoice->currency}}

        </td>

        <td style="width: 10%; text-align: right">
            {{$item->vat}} %

        </td>

        <td style="width: 20%; text-align: right">
            {{ number_format($item->count * $item->price * (( 100 + $item->vat) / 100 ) , 2,',',' ') }}
            {{$invoice->currency}}

        </td>


    </tr>

    @endforeach
    </tbody>

</table>


<div class="row">
    <div class="col-md-12">


        <table style="width: 100%">
            <tr >
                <td style="width: 50%">
                    <p>{{$invoice->description }} </p>

                </td>

                <td style="width: 50%">
                    <table class="table table-bordered">
                        <tr>


                            <th style="width: 50%">
                                Základ pro DPH
                            </th>

                            <td style="width: 50%; text-align: right">
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
                                Celková cena s DPH
                            </th>

                            <td style="text-align: right">


                                {{ number_format($invoice->priceVatTotal, 2,',',' ') }}
                                {{$invoice->currency}}


                            </td>


                        </tr>

                    </table>


                </td>


            </tr>

        </table>

    </div>
</div>

Vystavil: {{$invoice->created_by }}

</div>


<div id="footer">
    <hr>
    <small>
        SENMAN s.r.o. <br>
        Argentinska 38 <br>
        170 00 Prague 7
        Czech Republic
    </small>


</div>