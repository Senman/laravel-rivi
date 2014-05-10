<div class="form-group">
    <label for="name">Název </label>


    {{ Form::text('name' , null, array( 'class' => 'form-control')) }}

</div>



<div class="form-group">
    <label for="name">Stave </label>


    {{ Form::select('state' , array('new' => 'new', 'active' => 'active', 'closed' => 'closed' ) ,null, array( 'class' => 'form-control')) }}



</div>
