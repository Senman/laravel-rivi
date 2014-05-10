<div class="row ">
    <div class="col-md-12">


        {{ link_to_action('FinanceBudgetItemController@create', 'Vytvořit',
        array($budget->id), array('class' => 'btn btn-success btn-block') )}}
    </div>
</div>

<br>

<div class="row ">
    <div class="col-md-6">

        {{ link_to_action('FinanceBudgetController@edit', 'Editovat',
        array($budget->id), array('class' => 'btn btn-default btn-block') )}}

    </div>

    <div class="col-md-6">


        {{ Form::open(array('action' => array('FinanceBudgetController@delete'))) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::hidden('id', $budget->id) }}
        {{ Form::submit('Smazat', array('class' => 'btn btn-danger btn-block', 'onclick' =>'return confirm("Are you sure?")' )) }}
        {{ Form::close() }}

    </div>
</div>
