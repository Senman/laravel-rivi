<div class="row ">
    <div class="col-md-6">


        {{ link_to_action('BankController@edit', trans('messages.edit'),
        array($bank->id), array('class' => 'btn btn-default  btn-block') )}}

    </div>

    <div class="col-md-6">


        {{ Form::open(array('action' => array('BankController@delete'))) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::hidden('id', $bank->id) }}
        {{ Form::submit(trans('messages.delete'), array('class' => 'btn btn-danger  btn-block', 'onclick' =>'return confirm("Are you sure?")'  )) }}
        {{ Form::close() }}

    </div>
</div>
