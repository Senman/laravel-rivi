<?php
$template_form_data = [
    'name' => 'username',
    'value' => Input::old('username'),
    'label' => trans('messages.user.username'),
    'placeholder' => trans('messages.users.username'),
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )


<?php
$template_form_data = [
    'name' => 'password',
    'value' => null,
    'label' => trans('messages.user.password'),
    'placeholder' => trans('messages.user.password'),
    'class' => ''];

?>
@include('layoutForms.password', $template_form_data )
