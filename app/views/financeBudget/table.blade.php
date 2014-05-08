<table class="table table-bordered">
    <thead>

    <tr>


    <tr>




        <th >Název</th>
        <th >
        Předpokládané příjmy

        </th>
        <th >

        Předpokládané výdaje

        </th>
        <th >

        Reálné příjmy

        </th>
        <th >

        Reálné výdaje

        </th>


        <th></th>
    </tr>


    </tr>

    </thead>
    <tbody>

    @foreach($budgets as $budget)

    <tr>

        <td>
            {{$budget->name}}

        </td>

        <td>


        </td>
        <td>


        </td>

        <td>


        </td>
        <td>


        </td>

        <td>

        {{ link_to_action('FinanceBudgetController@detail', 'Detail', array($budget->id), array('class' => 'btn
        btn-default btn-block') )}}
        </td>
    </tr>

    @endforeach

    </tbody>
</table>