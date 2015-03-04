
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