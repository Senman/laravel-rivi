<div class="form-group">
    <label for="firstName">{{ trans('messages.first.name') }}</label>


    {{ Form::text('firstName' , null, array( 'class' => 'form-control')) }}

</div>




<div class="form-group">
    <label for="lastName">{{ trans('messages.last.name') }}</label>


    {{ Form::text('lastName' , null, array( 'class' => 'form-control')) }}

</div>






<div class="form-group">
    <label for="username">{{ trans('messages.username') }}</label>


    {{ Form::text('username' , null, array( 'class' => 'form-control')) }}

</div>





<div class="form-group">
    <label for="email">{{ trans('messages.email') }}</label>


    {{ Form::text('email' , null, array( 'class' => 'form-control')) }}

</div>

<div class="form-group">
    <label for="email">{{ trans('messages.role') }}</label>


    {{ Form::select('role' , $roles ,null, array( 'class' => 'form-control')) }}

</div>



