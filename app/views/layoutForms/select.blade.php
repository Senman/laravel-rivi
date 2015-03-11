<?php

/**
 * Usage
 * @include('layoutForms.select' , array('name'=> 'myselect', 'array'=>$myarray, 'selected'=> '1', 'label' => trans('message.datepicker'), 'class'=>''   ))
 *
 * name (req.)
 * label (req.)
 * array (req.)
 *
 * class (opt.)
 
 
chybně uvedeno:
{{ Form::select($name , $items , $selected, array( 'class' => 'form-control '.$class )) }} 
 
 
funkční
{{ Form::select($name , array('A' => 'admin')) }}
 */

  
?>

<div class="form-group">
    <label for="{{$name}}">{{ $label }}</label>
	
	{{ Form::select($name , $items , $selected, array( 'class' => 'form-control '.$class )) }}
	
</div>
