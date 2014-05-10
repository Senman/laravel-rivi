
<table class="table table-bordered">
    <tr>

        <th>
            Název
        </th>

        <th>
            Rozpočet
        </th>

        <th>
            Položka
        </th>

        <th>
            Příjem
        </th>

        <th>
            Výdaj
        </th>

        <th>
            DPH
        </th>
    </tr>
    @foreach($bill->budgetItems as $budgetItems)
    <tr>
        <td>
            {{$budgetItems->pivot->pivot_name}}
        </td>
        <td>
            {{$budgetItems->budget->name}}
        </td>
        <td>
            {{$budgetItems->name}}
        </td>
        <td>
            {{ number_format($budgetItems->pivot->pivot_income  , 2,',',' ') }}

        Kč
        </td>
        <td>
            {{ number_format($budgetItems->pivot->pivot_outcome  , 2,',',' ') }}
      Kč
        </td>
        <td>

            {{ $budgetItems->pivot->pivot_vat }} %

        </td>
    </tr>
    @endforeach


</table>