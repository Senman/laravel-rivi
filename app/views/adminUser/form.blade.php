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
    'label' => trans('message.last.name'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )



<?php
$template_form_data = [
    'name' => 'username',
    'value' => null,
    'label' => trans('message.username'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )





<?php
$template_form_data = [
    'name' => 'email',
    'value' => null,
    'label' => trans('message.email'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )



<?php
$template_form_data = [
    'name' => 'role',
    'items' => 'admin',
    'selected' => null,
    'label' => trans('message.role'),
    'class' => ''];
?>
@include('layoutForms.select', $template_form_data )

