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

    @foreach($budgetItems as $budgetItem)

    <tr>

        <td>
            {{$budgetItem->name}}

        </td>

        <td>
            {{$budgetItem->income}}

        </td>
        <td>

            {{$budgetItem->outcome}}
        </td>

        <td>


        </td>
        <td>


        </td>

        <td>


        </td>
    </tr>

    @endforeach

    </tbody>
</table>