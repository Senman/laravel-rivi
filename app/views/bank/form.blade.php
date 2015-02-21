<div class="form-group">
    <label for="name">{{ trans('messages.bank.name') }} </label>


    {{ Form::text('name' , null, array( 'class' => 'form-control')) }}

</div>



<div class="form-group">
    <label for="name">{{ trans('messages.bank.number') }}</label>


    {{ Form::text('number' , null, array( 'class' => 'form-control')) }}

</div>


<div class="form-group">
    <label for="name">{{ trans('messages.iban') }}</label>


    {{ Form::text('iban' , null, array( 'class' => 'form-control')) }}

</div>


<div class="form-group">
    <label for="name">{{ trans('messages.swift') }}</label>


    {{ Form::text('swift' , null, array( 'class' => 'form-control')) }}

</div>



<div class="form-group">
    <label for="name">{{ trans('messages.bank.name') }}</label>


    {{ Form::text('bankName' , null, array( 'class' => 'form-control')) }}

</div>



<div class="form-group">
    <label for="name">{{ trans('messages.address') }}</label>


    {{ Form::text('address' , null, array( 'class' => 'form-control')) }}

</div>
