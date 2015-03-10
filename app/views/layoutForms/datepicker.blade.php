<?php

/**
 * Usage
 * @include('layoutForms.datepicker' , array('name'=> 'mydate', 'label' => trans('message.datepicker')   ))
 *
 */


?>


<div class="form-group">
    <label for="{{$name}}">{{  $label  }}</label>
    {{ Form::text( $name , null, array( 'class' => 'form-control' , 'data-initialize' => 'datepicker'   )) }}
</div>

