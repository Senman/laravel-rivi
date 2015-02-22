<div class="form-group">
    <label for="name">{{ trans('messages.bank.name') }} </label>
    {{ Form::text('name' , null, array( 'class' => 'form-control')) }}
</div>

<div class="form-group">
    <label for="name">{{ trans('messages.bank.account') }}</label>
    {{ Form::text('account' , null, array( 'class' => 'form-control')) }}
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
    <label for="name">{{ trans('messages.street') }}</label>
    {{ Form::text('street' , null, array( 'class' => 'form-control')) }}
</div>
<div class="form-group">
    <label for="name">{{ trans('messages.house_number') }}</label>
    {{ Form::text('house_number' , null, array( 'class' => 'form-control')) }}
</div>

<div class="form-group">
    <label for="name">{{ trans('messages.zip') }}</label>
    {{ Form::text('zip' , null, array( 'class' => 'form-control')) }}
</div>
<div class="form-group">
    <label for="name">{{ trans('messages.city') }}</label>
    {{ Form::text('city' , null, array( 'class' => 'form-control')) }}
</div>
<div class="form-group">
    <label for="name">{{ trans('messages.country') }}</label>
    {{ Form::text('country' , null, array( 'class' => 'form-control')) }}
</div>



