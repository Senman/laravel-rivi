<table class="table table-bordered">
    <thead>

    <tr>


    <tr>



        <th style="width: 20%">Název</th>




        <th></th>

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

            {{ link_to_action('FinanceBillTypeController@detail', 'Detail', array($billType->id), array('class' => 'btn
            btn-default btn-block') )}}

        </td>

    </tr>

    @endforeach

    </tbody>
</table>