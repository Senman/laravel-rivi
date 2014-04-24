@if(Auth::check())





{{ link_to_action('UserController@edit', 'Osobni udaje', null,  array('class' => 'btn btn-default btn-block') )}}

<br>

{{ link_to_action('UserContactController@edit', 'Kontaktní udaje', null,  array('class' => 'btn btn-default btn-block') )}}

<br>


{{ link_to_action('UserPasswordController@edit', 'Změnit heslo', null, array('class' => 'btn btn-default btn-block') )}}

<br>



@endif