<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">{{ trans('messages.company.name') }}</label>


            {{ Form::text('name' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="cid">{{ trans('messages.cid') }}</label>
            {{ Form::text('cid' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>

    <div class="col-md-3">

        <div class="form-group">
            <label for="vatid">{{ trans('messages.vatid') }}</label>
            {{ Form::text('vatid' , null, array( 'class' => 'form-control')) }}

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
            {{ Form::text('bankAccount' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="bankName">{{ trans('messages.bank.name') }}</label>
            {{ Form::text('bankName' , null, array( 'class' => 'form-control')) }}

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
