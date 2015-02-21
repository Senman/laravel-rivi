<table class="table table-bordered">
    <thead>

    <tr>


        <th>{{ trans('messages.name') }}</th>

        <th>{{ trans('messages.cid') }}</th>

        <th>{{ trans('messages.address') }}</th>


        <th></th>


    </tr>

    </thead>
    <tbody>

    @foreach($companies as $company)

    <tr>
        <td>

            <strong>  {{$company->name}} </strong>
        </td>

        <td>
            {{$company->cid}}

        </td>

        <td>
            {{$company->street}},  {{$company->zip}},  {{$company->city}}  ,         {{$company->country}}
        </td>


        <td>

            {{ link_to_action('FinanceInvoiceController@createSecond', trans('messages.do.invoice'), array($company->id),
            array('class' => 'btn btn-default btn-block')) }}


        </td>
    </tr>

    @endforeach

    </tbody>
</table>