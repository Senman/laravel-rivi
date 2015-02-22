<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="name">{{ trans('messages.name') }}</label>
            {{ Form::text('name' , null, array( 'class' => 'form-control')) }}

        </div>


    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="language">{{ trans('messages.language') }}</label>
            {{ Form::select('language', array('cz' => 'cz', 'en' => 'en'), null, array('class' => 'form-control')) }}

        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="date_issued">{{ trans('messages.date.issued') }}</label>
            {{ Form::text('issued_at' , null, array( 'class' => 'form-control datepicker')) }}

        </div>

    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="due_date">{{ trans('messages.due.date') }}</label>
            {{ Form::text('due_at' , null, array( 'class' => 'form-control datepicker')) }}

        </div>

    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="date_vat">{{ trans('messages.date.vat') }}</label>
            {{ Form::text('vat_at' , null, array( 'class' => 'form-control datepicker')) }}

        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <h3>Odběratel</h3>


        <div class="form-group">
            <label for="company_name">{{ trans('messages.company.name') }}</label>
            {{ Form::text('company_name' , null, array( 'class' => 'form-control')) }}

        </div>
        <div class="form-group">
            <label for="company_street">{{ trans('messages.street') }}</label>
            {{ Form::text('company_street' , null, array( 'class' => 'form-control')) }}

        </div>
        <div class="form-group">
            <label for="company_zip">{{ trans('messages.zip') }}</label>
            {{ Form::text('company_zip' , null, array( 'class' => 'form-control')) }}

        </div>
        <div class="form-group">
            <label for="company_city">{{ trans('messages.city') }}</label>
            {{ Form::text('company_city' , null, array( 'class' => 'form-control')) }}

        </div>

        <div class="form-group">
            <label for="company_country">{{ trans('messages.country') }}</label>
            {{ Form::text('company_country' , null, array( 'class' => 'form-control')) }}

        </div>
        <div class="form-group">
            <label for="company_num">{{ trans('messages.company.num') }}</label>
            {{ Form::text('company_idn' , null, array( 'class' => 'form-control')) }}

        </div>
        <div class="form-group">
            <label for="company_vat_num">{{ trans('messages.company.vat.num') }}</label>
            {{ Form::text('company_vat_idn' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>

    <div class="col-md-6">
        <h3>{{ trans('messages.provider') }}</h3>

        <div class="form-group">
            <label for="home_name">{{ trans('messages.home.name') }}</label>
            {{ Form::text('home_name' , null, array( 'class' => 'form-control')) }}

        </div>
        <div class="form-group">
            <label for="home_street">{{ trans('messages.street') }}</label>
            {{ Form::text('home_street' , null, array( 'class' => 'form-control')) }}

        </div>


        <div class="form-group">
            <label for="home_zip">{{ trans('messages.zip') }}</label>
            {{ Form::text('home_zip' , null, array( 'class' => 'form-control')) }}

        </div>


        <div class="form-group">
            <label for="home_city">{{ trans('messages.city') }}</label>
            {{ Form::text('home_city' , null, array( 'class' => 'form-control')) }}

        </div>


        <div class="form-group">
            <label for="home_country">{{ trans('messages.country') }}</label>
            {{ Form::text('home_country' , null, array( 'class' => 'form-control')) }}

        </div>


        <div class="form-group">
            <label for="home_id">{{ trans('messages.home.id') }}</label>
            {{ Form::text('home_idn' , null, array( 'class' => 'form-control')) }}

        </div>

        <div class="form-group">
            <label for="home_vid">{{ trans('messages.home.vat.id') }}</label>
            {{ Form::text('home_vat_idn' , null, array( 'class' => 'form-control')) }}

        </div>


    </div>
</div>

<div class="row">
    <div class="col-md-4">


        <div class="form-group">
            <label for="currency">{{ trans('messages.currency') }}</label>
            {{ Form::text('currency' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="account">{{ trans('messages.payment.type') }}</label>
            {{ Form::select('payment_type', array('bankTransfer' => 'Bankovní převod', 'cash' => 'V hotovosti' ), null , array( 'class' =>
            'form-control')) }}

        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label for="account">{{ trans('messages.account') }}</label>


            {{ Form::select('account_id', $accounts, null , array( 'class' =>
            'form-control')) }}



        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">

        <div class="form-group">
            <label for="symbol_constant">{{ trans('messages.constant.symbol') }}</label>
            {{ Form::text('symbol_constant' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="symbol_variable">{{ trans('messages.variable.symbol') }}</label>
            {{ Form::text('symbol_variable' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="symbol_specific">{{ trans('messages.specific.symbol') }}</label>
            {{ Form::text('symbol_specific' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>
</div>








<div class="form-group">
    <label for="description">{{ trans('messages.description') }}</label>
    {{ Form::textarea('description' , null, array( 'class' => 'form-control', 'rows' => '3')) }}

</div>































