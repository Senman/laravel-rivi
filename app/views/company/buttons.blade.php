<div class="row ">
    <div class="col-md-6">


        {{ link_to_action('CompanyController@edit', trans('messages.edit'),
        array($company->id), array('class' => 'btn btn-default  btn-block') )}}

    </div>

    <div class="col-md-6">


        {{ Form::open(array('action' => array('CompanyController@delete'))) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::hidden('id', $company->id) }}
        {{ Form::submit(trans('messages.delete'), array('class' => 'btn btn-danger  btn-block', 'onclick' =>'return confirm(trans("messages.are.you.sure"))'  )) }}
        {{ Form::close() }}

    </div>
</div>
