<?php

$template_form_data = [
    'name' => 'password',
    'value' => null,
    'label' => trans('messages.password'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.password', $template_form_data )



<?php
$template_form_data = [
    'name' => 'passwordConfirm',
    'value' => null,
    'label' => trans('messages.password.again'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.password', $template_form_data )