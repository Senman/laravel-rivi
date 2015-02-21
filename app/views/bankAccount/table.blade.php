<table class="table table-bordered">
    <thead>

    <tr>


    <tr>



        <th >{{ trans('messages.account.name') }}</th>

        <th >{{ trans('messages.account.number') }}</th>

        <th >{{ trans('messages.iban') }}</th>
        <th >{{ trans('messages.swift') }}</th>
        <th >{{ trans('messages.bank.name') }}</th>

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

            {{ link_to_action('FinanceAccountController@detail', trans('messages.detail'), array($account->id), array('class' => 'btn
            btn-default btn-block') )}}

        </td>

    </tr>

    @endforeach

    </tbody>
</table>