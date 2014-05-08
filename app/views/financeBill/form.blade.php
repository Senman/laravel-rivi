<div class="form-group">
    <label for="name">Název </label>


    {{ Form::text('name' , null, array( 'class' => 'form-control')) }}

</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="date_issued">date_issued </label>


            {{ Form::text('date_issued' , null, array( 'class' => 'form-control datepicker')) }}

        </div>


    </div>

    <div class="col-md-4">

        <div class="form-group">
            <label for="due_date">due_date </label>


            {{ Form::text('due_date' , null, array( 'class' => 'form-control datepicker')) }}

        </div>

    </div>
    <div class="col-md-4">

        <div class="form-group">
            <label for="date_vat">date_vat </label>


            {{ Form::text('date_vat' , null, array( 'class' => 'form-control datepicker')) }}

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-5">


        <div class="form-group">
            <label for="income">income </label>


            {{ Form::text('income' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>
    <div class="col-md-5">


        <div class="form-group">
            <label for="outcome">outcome </label>


            {{ Form::text('outcome' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>
    <div class="col-md-2">

        <div class="form-group">
            <label for="vat">vat </label>


            {{ Form::text('vat' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>
</div>



<div class="form-group">
    <label for="payment_type">Zaučtováno jako </label>


    {{ Form::select('payment_type', $types , Input::old('payment_type') , array( 'class' =>
    'form-control')) }}


</div>


<div class="form-group">
    <label for="type">type </label>


    {{ Form::text('type' , null, array( 'class' => 'form-control')) }}

</div>

<div class="form-group">
    <label for="note">note </label>


    {{ Form::text('note' , null, array( 'class' => 'form-control')) }}

</div>

