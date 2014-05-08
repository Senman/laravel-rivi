<div class="row ">
    <div class="col-md-6">


        {{ link_to_action('FinanceBillTypeController@edit', 'Editovat',
        array($billType->id), array('class' => 'btn btn-default  btn-block') )}}

    </div>

    <div class="col-md-6">


        {{ Form::open(array('action' => array('FinanceBillTypeController@delete'))) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::hidden('id', $billType->id) }}
        {{ Form::submit('Smazat', array('class' => 'btn btn-danger  btn-block', 'onclick' =>'return confirm("Are you sure?")'  )) }}
        {{ Form::close() }}

    </div>
</div>
