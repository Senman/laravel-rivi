<div class="row ">
    <div class="col-md-6">


        {{ link_to_action('FinanceBillController@edit', 'Editovat',
        array($bill->id), array('class' => 'btn btn-default  btn-block') )}}

    </div>

    <div class="col-md-6">


        {{ Form::open(array('action' => array('FinanceBillController@delete'))) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::hidden('id', $bill->id) }}
        {{ Form::submit('Smazat', array('class' => 'btn btn-danger  btn-block', 'onclick' =>'return confirm("Are you sure?")'  )) }}
        {{ Form::close() }}

    </div>
</div>
