<table class="table table-bordered">
    <thead>

    <tr>


    <tr>



        <th >{{ trans('messages.bank.name') }}</th>
		<th >{{ trans('messages.bank.branch') }}</th>
        <th >{{ trans('messages.bank.number') }}</th>

        <th >{{ trans('messages.iban') }}</th>
        <th >{{ trans('messages.swift') }}</th>
        

        <th style="width: 20%"></th>

    </tr>


    </tr>

    </thead>
    <tbody>

    @foreach($banks as $bank)

    <tr>
        <td>

            {{ $bank->name}}
        </td>
	
		<td>

            {{ $bank->street}} {{ $bank->house_number}}<br>
            {{ $bank->city}}
        </td>
        
        <td>

            {{ $bank->account}}
        </td>

        <td>

            {{ $bank->iban}}
        </td>

        <td>

            {{ $bank->swift}}
        </td>

        <td>

            {{ link_to_action('BankController@detail', trans('messages.detail'), array($bank->id), array('class' => 'btn
            btn-default btn-block') )}}

        </td>

    </tr>

    @endforeach

    </tbody>
</table>