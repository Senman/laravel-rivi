<?php
$template_form_data = [
    'name' => 'firstName',
    'value' => null,
    'label' => trans('message.first.name'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )




<?php
$template_form_data = [
    'name' => 'lastName',
    'value' => null,
    'label' => trans('messages.last.name'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )



<?php
$template_form_data = [
    'name' => 'username',
    'value' => null,
    'label' => trans('messages.username'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )





<?php
$template_form_data = [
    'name' => 'email',
    'value' => null,
    'label' => trans('messages.email'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )



<?php
$template_form_data = [
    'name' => 'role',
 	'items' => array('A' => 'admin', 'U' => 'uživatel'),
    'selected' => null,
    'label' => trans('messages.role'),
    'class' => ''];
?>
@include('layoutForms.select', $template_form_data )

