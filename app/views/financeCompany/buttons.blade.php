<div class="row ">
    <div class="col-md-6">


        {{ link_to_action('AdminCompanyController@edit', 'Editovat',
        array($company->id), array('class' => 'btn btn-default  btn-block') )}}

    </div>

    <div class="col-md-6">


        {{ Form::open(array('action' => array('AdminCompanyController@delete'))) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::hidden('id', $company->id) }}
        {{ Form::submit('Smazat', array('class' => 'btn btn-danger  btn-block', 'onclick' =>'return confirm("Are you sure?")'  )) }}
        {{ Form::close() }}

    </div>
</div>
