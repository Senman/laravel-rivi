<div class="row ">
    <div class="col-md-6">


        {{ link_to_action('FinanceAccountController@edit', 'Editovat',
        array($account->id), array('class' => 'btn btn-default  btn-block') )}}

    </div>

    <div class="col-md-6">


        {{ Form::open(array('action' => array('FinanceAccountController@delete'))) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::hidden('id', $account->id) }}
        {{ Form::submit('Smazat', array('class' => 'btn btn-danger  btn-block', 'onclick' =>'return confirm("Are you sure?")'  )) }}
        {{ Form::close() }}

    </div>
</div>
