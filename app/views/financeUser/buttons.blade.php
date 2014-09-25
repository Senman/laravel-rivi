@if(Auth::check())


{{ link_to_action('FinanceUserController@edit', 'Editovat zaměstnance', array($user->id), array('class' => 'btn btn-default btn-block') )}}

<br>


{{ link_to_action('FinanceUserPasswordController@edit', 'Změnit heslo', array($user->id), array('class' => 'btn btn-default btn-block') )}}

<br>




{{ Form::open(array('action' => array('FinanceUserController@delete'))) }}


{{ Form::hidden('_method', 'DELETE') }}

{{ Form::hidden('id', $user->id) }}
{{ Form::submit('Smazat', array('class' => 'btn btn-danger btn-block' , 'onclick' =>'return confirm("Are you sure?")' )) }}
{{ Form::close() }}


@endif