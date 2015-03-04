<?php
$template_form_data = [
    'name' => 'name',
    'value' => null,
    'label' => trans('message.name'),
    'placeholder' => '',
    'class' => 'input-lg'];
?>
@include('layoutForms.text', $template_form_data )




<?php
$template_form_data = [
    'name' => 'language',
    'items' => array('cz' => 'Czech', 'en' => 'English'),
    'selected' => 'cz',
    'label' => trans('message.language.select'),
    'class' => 'input-lg'];
?>
@include('layoutForms.select', $template_form_data )




<?php
$template_form_data = [
    'name' => 'currency',
    'items' => $currency,
    'selected' => null,
    'label' => trans('message.currency.select'),
    'class' => 'input-lg'];
?>
@include('layoutForms.select', $template_form_data )


<?php
$template_form_data = [
    'name' => 'year',
    'items' => $years,
    'selected' => $currentYear,
    'label' => trans('message.year.select'),
    'class' => 'input-lg'];
?>
@include('layoutForms.select', $template_form_data )
