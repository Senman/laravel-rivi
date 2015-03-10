<?php
$template_form_data = [
    'name' => 'username',
    'value' => Input::old('username'),
    'label' => trans('message.username'),
    'placeholder' => trans('message.username'),
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )


<?php
$template_form_data = [
    'name' => 'password',
    'value' => null,
    'label' => trans('message.password'),
    'placeholder' => trans('message.password'),
    'class' => ''];
?>
@include('layoutForms.password', $template_form_data )
