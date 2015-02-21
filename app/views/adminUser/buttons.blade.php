@if(Auth::check())


{{ link_to_action('AdminUserController@edit', trans('messages.edit.employee'), array($user->id), array('class' => 'btn btn-default btn-block') )}}

<br>


{{ link_to_action('AdminUserPasswordController@edit', trans('messages.edit.password'), array($user->id), array('class' => 'btn btn-default btn-block') )}}


<br>



{{ Form::open(array('action' => array('AdminUserController@delete'))) }}


{{ Form::hidden('_method', 'DELETE') }}

{{ Form::hidden('id', $user->id) }}
{{ Form::submit(trans('messages.delete'), array('class' => 'btn btn-danger btn-block' , 'onclick' =>'return confirm(trans("messages.are.you.sure"))' )) }}
{{ Form::close() }}


@endif