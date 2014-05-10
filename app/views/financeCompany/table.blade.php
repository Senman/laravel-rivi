<table class="table table-bordered">
    <thead>

    <tr>


        <th>Název</th>

        <th>IČ</th>

        <th>Adresa</th>


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



            {{ link_to_action('FinanceCompanyController@detail', 'Detail', array($company->id), $attributes = array('class'
            => 'btn btn-default' ))  }}
        </td>
    </tr>

    @endforeach

    </tbody>
</table>