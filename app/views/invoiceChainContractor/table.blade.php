<table class="table table-bordered">
    <thead>

    <tr>


        <th>{{ trans('messages.company.name') }}</th>

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



            {{ link_to_action('InvoiceChainContractorController@confirm', 'Select', array($invoice->id, $company->id), $attributes = array('class'
            => 'btn btn-default' ))  }}
        </td>
    </tr>

    @endforeach

    </tbody>
</table>