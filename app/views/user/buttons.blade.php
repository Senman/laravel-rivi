@if(Auth::check())





{{ link_to_action('UserController@edit', 'Osobni udaje', array($user->id), array('class' => 'btn btn-default btn-block') )}}

<br>

{{ link_to_action('UserController@editContact', 'Kontaktní udaje', array($user->id), array('class' => 'btn btn-default btn-block') )}}

<br>


{{ link_to_action('UserPasswordController@edit', 'Změnit heslo', array($user->id), array('class' => 'btn btn-default btn-block') )}}

<br>

@endif