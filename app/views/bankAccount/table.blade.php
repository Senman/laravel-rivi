<table class="table table-bordered">
    <thead>

    <tr>


    <tr>



        <th >{{ trans('messages.bankAccount.name') }}</th>

        <th >{{ trans('messages.bankAccount.number') }}</th>

        <th >{{ trans('messages.iban') }}</th>
        <th >{{ trans('messages.swift') }}</th>
        <th >{{ trans('messages.bank.name') }}</th>

        <th style="width: 20%"></th>

    </tr>


    </tr>

    </thead>
    <tbody>

    @foreach($bankAccounts as $bankAccount)

    <tr>
        <td>

            {{ $bankAccount->name}}
        </td>

        <td>

            {{ $bankAccount->number}}
        </td>

        <td>

            {{ $bankAccount->iban}}
        </td>

        <td>

            {{ $bankAccount->swift}}
        </td>

        <td>

            {{ $bankAccount->bankName}}
        </td>

        <td>

            {{ link_to_action('BankAccountController@detail', trans('messages.detail'), array($bankAccount->id), array('class' => 'btn
            btn-default btn-block') )}}

        </td>

    </tr>

    @endforeach

    </tbody>
</table>