
<?php
$template_form_data = [
    'name' => 'name',
    'value' => null,
    'label' => trans('message.bank.name'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )



<?php
$template_form_data = [
    'name' => 'account',
    'value' => null,
    'label' => trans('message.bank.account'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )



<?php
$template_form_data = [
    'name' => 'iban',
    'value' => null,
    'label' => trans('message.iban'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )



<?php
$template_form_data = [
    'name' => 'swift',
    'value' => null,
    'label' => trans('message.swift'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )



<?php
$template_form_data = [
    'name' => 'street',
    'value' => null,
    'label' => trans('message.street'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )




<?php
$template_form_data = [
    'name' => 'house_number',
    'value' => null,
    'label' => trans('message.house_number'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )




<?php
$template_form_data = [
    'name' => 'zip',
    'value' => null,
    'label' => trans('message.zip'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )




<?php
$template_form_data = [
    'name' => 'city',
    'value' => null,
    'label' => trans('message.city'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )





<?php
$template_form_data = [
    'name' => 'country',
    'value' => null,
    'label' => trans('message.country'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )
