<?php
$template_form_data = [
    'name' => 'name',
    'value' => null,
    'label' => trans('message.bankAccount.name'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )



<?php
$template_form_data = [
    'name' => 'number',
    'value' => null,
    'label' => trans('message.bankAccount.number'),
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
    'name' => 'bankName',
    'value' => null,
    'label' => trans('message.bank.name'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )




<?php
$template_form_data = [
    'name' => 'address',
    'value' => null,
    'label' => trans('message.address'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )