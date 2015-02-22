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
            <h2 style="color: #ffffff"> INVOICE </h2>

        </td>

        <td style="text-align: right">
            <h3>Number: </h3>

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
            Supplier

        </th>


        <th>
            Customer

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
                ID: {{$invoice->home_id }} <br>
                VAT ID: {{$invoice->home_vid }}
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
                @if($invoice->company_num)
                ID: {{$invoice->company_num }} <br>
                @endif

                @if($invoice->company_vat_num)
                VAT ID: {{$invoice->company_vat_num }}
                @endif
            </p>
        </td>
    </tr>


</table>


<table class="table table-bordered">
    <tr>
        <th style="width: 25%">

            Payment Details

        </th>
        <td style="width: 25%">

            {{ trans('messages.'.$invoice->payment_type.'_en') }}

        </td>





        <th style="width: 25%">



            Invoice Nr.:






        </th>
        <td style="width: 25%">





            {{$invoice->symbol_variable }}




        </td>


    </tr>

    <tr>
        <th>

            Bank

        </th>
        <td>
            {{$invoice->bankName }}

            <br />
            {{$invoice->bankAddress }}
        </td>

        <th>

         Date Issued

        </th>
        <td>
            {{$invoice->date_issued }}


        </td>


    </tr>


    <tr>
        <th>

            Account IBAN

        </th>
        <td>



            {{$invoice->bankIban }}




        </td>

        <th>

            Date of issue:

        </th>
        <td>
            {{$invoice->date_vat }}


        </td>


    </tr>


    <tr>
        <th>

            Account SWIFT



        </th>
        <td>
            {{$invoice->bankSwift }}


        </td>

        <th>

            Due date:

        </th>
        <td>
           {{$invoice->due_date }}


        </td>


    </tr>





</table>


<table class="table table-bordered">
    <thead>


    <tr>


        <th style="width: 50%">Description</th>

        <!--        <th style="text-align: center">Množství</th>
                <th style="text-align: right">Jednotková cena <br>[bez DPH]</th>-->

        <th style="text-align: right">Price w/o VAT</th>
        <th style=" text-align: right">VAT</th>


        <th style="text-align: right">Price with VAT</th>
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

            {{ number_format($item->count * $item->price , 2 , '.'  ,  ',') }}
            {{$invoice->currency}}

        </td>

        <td style="width: 10%; text-align: right">
            {{$item->vat}} %

        </td>

        <td style="width: 20%; text-align: right">
            {{ number_format($item->count * $item->price * (( 100 + $item->vat) / 100 ) , 2 , '.'  ,  ',') }}
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
                                Total Price w/o VAT
                            </th>

                            <td style="width: 50%; text-align: right">
                                {{ number_format( $invoice->priceTotal, 2 , '.'  ,  ',') }}
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
                              VAT TOTAL
                            </th>

                            <td style="text-align: right">
                                {{ number_format($invoice->vatTotal , 2 , '.'  ,  ',') }}
                                {{$invoice->currency}}
                            </td>


                        </tr>

                        <tr>
                            <th>
                                TOTAL
                            </th>

                            <td style="text-align: right">



                                {{ number_format($invoice->priceVatTotal  , 2 , '.'  ,  ',') }}
                                {{$invoice->currency}}


                            </td>


                        </tr>

                    </table>


                </td>


            </tr>

        </table>

    </div>
</div>



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