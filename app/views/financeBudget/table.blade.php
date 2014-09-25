<table class="table table-bordered">
    <thead>

    <tr>


    <tr>


        <th>Název</th>
        <th>
            Předpokládané příjmy

        </th>
        <th>

            Předpokládané výdaje

        </th>

        <th>

            Rozdíl

        </th>

        <th>

            Reálné příjmy

        </th>
        <th>

            Reálné výdaje

        </th>


        <th>
            Rozdíl
        </th>

        <th>

        </th>
    </tr>


    </tr>

    </thead>
    <tbody>

    <?php
    $incomeTotal = 0;
    $outcomeTotal = 0;
    $realIncomeTotal = 0;
    $realOutcomeTotal = 0;

    ?>

    @foreach($budgets as $budget)

    <?php
    $incomeTotal += $budget->incomeTotal;
    $outcomeTotal += $budget->outcomeTotal;
    $realIncomeTotal += $budget->realIncomeTotal;
    $realOutcomeTotal += $budget->realOutcomeTotal;

    ?>

    <tr>

        <td>
            {{$budget->name}}

            @include('layouts.state' , array('state'=>$budget->state))


        </td>


        <td style="text-align: right;">
            {{ number_format($budget->incomeTotal , 2,',',' ') }}

            Kč
        </td>
        <td style="text-align: right;">
            {{ number_format($budget->outcomeTotal , 2,',',' ') }}

            Kč


        </td>

        <td style="text-align: right;">

            {{ number_format($budget->incomeTotal - $budget->outcomeTotal , 2,',',' ') }}

            Kč

        </td>

        <td style="text-align: right;">


            {{ number_format($budget->realIncomeTotal , 2,',',' ') }}

            Kč

        </td>
        <td style="text-align: right;">

            {{ number_format($budget->realOutcomeTotal , 2,',',' ') }}

            Kč
        </td>


        <td style="text-align: right;">

            {{ number_format($budget->realIncomeTotal - $budget->realOutcomeTotal , 2,',',' ') }}

            Kč
        </td>

        <td>

            {{ link_to_action('FinanceBudgetController@detail', 'Detail', array($budget->id), array('class' => 'btn
            btn-default btn-block') )}}
        </td>
    </tr>

    @endforeach


    <tr>
        <th>
            Celkem

        </th>


        <td style="text-align: right;">
            <strong>
                {{ number_format($incomeTotal , 2,',',' ') }}
                Kč
            </strong>
        </td>

        <td style="text-align: right;">
            <strong>
                {{ number_format($outcomeTotal , 2,',',' ') }}
                Kč
            </strong>
        </td>

        <td style="text-align: right;">

            <strong>
                {{ number_format($incomeTotal - $outcomeTotal , 2,',',' ') }}
                Kč
            </strong>
        </td>


        <td style="text-align: right;">
            <strong>
                {{ number_format($realIncomeTotal , 2,',',' ') }}
                Kč
            </strong>
        </td>

        <td style="text-align: right;">
            <strong>
                {{ number_format($realOutcomeTotal , 2,',',' ') }}
                Kč
            </strong>
        </td>


        <td style="text-align: right;">
            <strong>
                {{ number_format($realIncomeTotal - $realOutcomeTotal , 2,',',' ') }}
                Kč
            </strong>
        </td>

        <td></td>
    </tr>

    </tbody>
</table>

<div class="row">
    <div class="col-md-offset-8 col-md-4">
        <table class="table table-bordered">

            <tr>
               <th style="width: 50%">
                   Příjmy

               </th>

                <td style="text-align: right;">

                    {{ number_format($realIncomeTotal , 2,',',' ') }}
                    Kč
                </td>

            </tr>

            <tr>
                <th>
                    Výdaje

                </th>

                <td style="text-align: right;">
                    {{ number_format($realOutcomeTotal , 2,',',' ') }}
                    Kč

                </td>

            </tr>

            <tr>
                <th>
                    Rozdíl

                </th>

                <td style="text-align: right;">
                    <strong>

                        {{ number_format($realIncomeTotal - $realOutcomeTotal , 2,',',' ') }}
                        Kč

                    </strong>


                </td>

            </tr>

        </table>

    </div>

</div>