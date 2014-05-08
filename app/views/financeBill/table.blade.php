<table class="table table-bordered">
    <thead>

    <tr>


    <tr>


        <th >Vystaveno</th>

        <th style="width: 20%">Název</th>


        <th>Splatné</th>
        <th style="width: 10%">Příjem</th>
        <th style="width: 10%">Výdaj</th>

        <th style="width: 10%">DPH</th>

        <th>Způsob platby</th>

        <th  style="width: 15%">Vložil</th>



        <th></th>

    </tr>


    </tr>

    </thead>
    <tbody>

    @foreach($bills as $bill)

    <tr>
        <td>

            {{$bill->date_issued}}

        </td>

        <td>

            {{ $bill->name}}
        </td>


        <td>
            {{ $bill->due_date}}

        </td>


        <td>
            {{ $bill->income}}

        </td>

        <td>
            {{ $bill->outcome}}

        </td>

        <td>
            {{ $bill->vat}}

        </td>

        <td>
            {{ $bill->payment_type}}

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

    </tbody>
</table>