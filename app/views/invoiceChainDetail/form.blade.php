







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




