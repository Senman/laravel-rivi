<?php

/**
 * Usage


<?php
$template_form_data = [
    'name' => 'contractor_name',
    'value' => $company->name,
    'label' => trans('message.contractor_idn'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.text', $template_form_data )


 *
 * name (req.)
 * label (req.)
 *
 * class (opt.)
 *
 */


?>




<div class="form-group">
    <label for="name">{{  $label  }}</label>
    {{ Form::password($name , $value , array( 'placeholder' => $placeholder, 'class' => 'form-control '.$class)) }}

</div>


