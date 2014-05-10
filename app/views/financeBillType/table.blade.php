<table class="table table-bordered">
    <thead>

    <tr>


    <tr>



        <th >Název</th>

        <th >Učetní skupina</th>


        <th style="width: 20%"></th>

    </tr>


    </tr>

    </thead>
    <tbody>

    @foreach($billTypes as $billType)

    <tr>
        <td>

            {{ $billType->name}}
        </td>

        <td>

            {{ $billType->group}}
        </td>


        <td>

            {{ link_to_action('FinanceBillTypeController@detail', 'Detail', array($billType->id), array('class' => 'btn
            btn-default btn-block') )}}

        </td>

    </tr>

    @endforeach

    </tbody>
</table>