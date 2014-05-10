<table class="table table-bordered">
    <thead>

    <tr>


    <tr>



        <th >Název</th>

        <th >Cislo uctu</th>

        <th >IBAN</th>
        <th >SWIFT</th>
        <th >Nazev banky</th>

        <th style="width: 20%"></th>

    </tr>


    </tr>

    </thead>
    <tbody>

    @foreach($accounts as $account)

    <tr>
        <td>

            {{ $account->name}}
        </td>

        <td>

            {{ $account->number}}
        </td>

        <td>

            {{ $account->iban}}
        </td>

        <td>

            {{ $account->swift}}
        </td>

        <td>

            {{ $account->bankName}}
        </td>

        <td>

            {{ link_to_action('FinanceAccountController@detail', 'Detail', array($account->id), array('class' => 'btn
            btn-default btn-block') )}}

        </td>

    </tr>

    @endforeach

    </tbody>
</table>