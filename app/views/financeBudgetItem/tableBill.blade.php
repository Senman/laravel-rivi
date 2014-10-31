<table class="table table-bordered">
    <thead>



    <tr>

        <th style="text-align: center">#</th>

        <th>Vystaveno</th>

        <th style="width: 20%">Název</th>


        <th>Splatné</th>

        <th>Způsob platby</th>

        <th style="width: 10%">Příjem</th>
        <th style="width: 10%">Výdaj</th>




        <th style="width: 15%">Vložil</th>


        <th></th>

    </tr>



    </thead>
    <tbody>



    @foreach($budgetItem->bills as $bill )

    <tr
        class='<?php

        if($bill->due_date < date('Y-m-d') && $bill->paid == false)
        {
            echo 'danger';
        }
        else if ( $bill->paid ) {

            echo 'success';
        }


    ?>'>
        <td style="text-align: center">

            {{$bill->id}}

        </td>

        <td>

            {{$bill->date_issued}}

        </td>

        <td>
            <strong>
            @if($bill->uploadName)



            {{ link_to_action('FinanceBillController@download', $bill->name,  array( $bill->id)) }}

            @else

            {{ $bill->name}}

            @endif
            </strong>
        </td>


        <td>
            {{ $bill->due_date}}

        </td>


        <td>
            {{ $bill->payment_type}}

        </td>


        <td style="text-align: right">



            {{ number_format($bill->incomeTotal , 2,',',' ') }}
            Kč


        </td>

        <td style="text-align: right">

            {{ number_format( $bill->outcomeTotal , 2,',',' ') }}
            Kč



        </td>



        <td>
            {{ $bill->created_by}}

        </td>
        <td>

            {{ link_to_action('FinanceBillController@detail', 'Detail', array($bill->id), array('class' => 'btn
            btn-default btn-block') )}}

        </td>

    </tr>

    @endforeach



    <tr>

        <th  colspan="5">Celkem</th>




        <td style="text-align: right">



        <strong>
        {{ number_format($budgetItem->realIncomeTotal  , 2,',',' ') }}

        Kč
        </strong>
        </td>




        <td style="text-align: right">
            <strong>
                {{ number_format($budgetItem->realOutcomeTotal   , 2,',',' ') }}

                Kč
            </strong>
        </td>

    </tr>



    </tbody>
</table>