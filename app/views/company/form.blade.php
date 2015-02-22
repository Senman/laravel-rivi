<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">{{ trans('messages.company.name') }}</label>
            {{ Form::text('name' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>



    <div class="col-md-6">
        <div class="form-group">
            <label for="name">{{ trans('messages.company.type') }}</label>
            {{ Form::text('type' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="idn">{{ trans('messages.idn') }}</label>
            {{ Form::text('idn' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>

    <div class="col-md-3">

        <div class="form-group">
            <label for="vat_idn">{{ trans('messages.vat_idn') }}</label>
            {{ Form::text('vat_idn' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-4">

        <div class="form-group">
            <label for="street">{{ trans('messages.street') }}</label>
            {{ Form::text('street' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="city">{{ trans('messages.city') }}</label>
            {{ Form::text('city' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label for="zip">{{ trans('messages.zip') }}</label>
            {{ Form::text('zip' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="zip">{{ trans('messages.house_num') }}</label>
            {{ Form::text('house_num' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>




    <div class="col-md-3">
        <div class="form-group">
            <label for="country">{{ trans('messages.country') }}</label>
            {{ Form::text('country' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="bankAccount">{{ trans('messages.bank.account') }}</label>
            {{ Form::text('bank_account' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="bankName">{{ trans('messages.bank.name') }}</label>
            {{ Form::text('bank_name' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="telephone">{{ trans('messages.telephone') }}</label>
            {{ Form::text('telephone' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="email">{{ trans('messages.email') }}</label>
            {{ Form::text('email' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>
</div>





<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="telephone">{{ trans('messages.rsi') }}</label>
            {{ Form::text('rsi' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>
</div>




