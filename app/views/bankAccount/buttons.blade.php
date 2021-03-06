<div class="row ">
    <div class="col-md-6">


        {{ link_to_action('BankAccountController@edit', trans('messages.edit'),
        array($bankAccount->id), array('class' => 'btn btn-default  btn-block') )}}

    </div>

    <div class="col-md-6">


        {{ Form::open(array('action' => array('BankAccountController@delete'))) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::hidden('id', $bankAccount->id) }}
        {{ Form::submit(trans('messages.delete'), array('class' => 'btn btn-danger  btn-block', 'onclick' =>'return confirm("Are you sure?")'  )) }}
        {{ Form::close() }}

    </div>
</div>
