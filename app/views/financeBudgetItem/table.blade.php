<table class="table table-bordered">
    <thead>

    <tr>


    <tr>


        <th>Název</th>
        <th style="text-align: right">
            Předpokládané příjmy

        </th>
        <th style="text-align: right">

            Reálné příjmy

        </th>

        <th style="text-align: right">

            Dosaženo

        </th>

        <th style="text-align: right">

            Předpokládané výdaje

        </th>
        <th style="text-align: right">

            Reálné výdaje

        </th>

        <th style="text-align: right">

            Zbývá

        </th>
        <th></th>
    </tr>


    </tr>

    </thead>
    <tbody>

    @foreach($budgetItems as $budgetItem)

    <tr>

        <td>
            {{$budgetItem->name}}

        </td>

        <td style="text-align: right">


            {{ number_format($budgetItem->income , 2,',',' ') }}
            Kč


        </td>


        <td style="text-align: right">
            {{ number_format($budgetItem->realIncomeTotal , 2,',',' ') }}
            Kč

        </td>

        <td style="text-align: right">
            @if( $budgetItem->income != 0 )
            <strong> {{ number_format( ( $budgetItem->realIncomeTotal / $budgetItem->income ) * 100 , 2,',',' ') }}
                % </strong>


            @endif
        </td>


        <td style="text-align: right">
            {{ number_format($budgetItem->outcome , 2,',',' ') }}
            Kč
        </td>


        <td style="text-align: right">

            {{ number_format($budgetItem->realOutcomeTotal , 2,',',' ') }}
            Kč


        </td>


        <td style="text-align: right">
            @if( $budgetItem->outcome != 0 )
            <strong> {{ number_format( ( ( $budgetItem->outcome - $budgetItem->realOutcomeTotal ) / $budgetItem->outcome
                ) * 100 , 2,',',' ') }}
                % </strong>
            @endif
        </td>

        <td>
            {{ link_to_action('FinanceBudgetItemController@detail', 'Detail', array($budgetItem->id), array('class' =>
            'btn
            btn-default btn-block') )}}

        </td>
    </tr>

    @endforeach

    <tr>

        <th>Celkem</th>

        <td style="text-align: right">
            <strong>
                {{ number_format($budget->incomeTotal , 2,',',' ') }}

                Kč
            </strong>
        </td>

        <td style="text-align: right">
            <strong>
                {{ number_format($budget->realIncomeTotal   , 2,',',' ') }}

                Kč
            </strong>
        </td>



        <td style="text-align: right">
            @if( $budget->incomeTotal != 0 )
            <strong> {{ number_format( ( $budget->realIncomeTotal / $budget->incomeTotal ) * 100 , 2,',',' ') }}
                % </strong>


            @endif
        </td>


        <td style="text-align: right">
            <strong>
                {{ number_format($budget->outcomeTotal  , 2,',',' ') }}

                Kč
            </strong>
        </td>




        <td style="text-align: right">
            <strong>
                {{ number_format($budget->realOutcomeTotal   , 2,',',' ') }}

                Kč
            </strong>
        </td>

        <td style="text-align: right">
            @if( $budget->outcomeTotal != 0 )
            <strong> {{ number_format( ( ( $budget->outcomeTotal- $budget->realOutcomeTotal  ) / $budget->outcomeTotal
                ) * 100 , 2,',',' ') }}
                % </strong>
            @endif
        </td>

        <td></td>

    </tr>

    </tbody>
</table>