<div class="form-group">
    <label for="name">Název </label>


    {{ Form::text('name' , null, array( 'class' => 'form-control')) }}

</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="date_issued">Datum vystavení </label>


            {{ Form::text('date_issued' , null, array( 'class' => 'form-control datepicker')) }}

        </div>


    </div>

    <div class="col-md-4">

        <div class="form-group">
            <label for="due_date">Datum splatnosti </label>


            {{ Form::text('due_date' , null, array( 'class' => 'form-control datepicker')) }}

        </div>

    </div>
    <div class="col-md-4">

        <div class="form-group">
            <label for="date_vat"> Datum zdanitelného plnění </label>


            {{ Form::text('date_vat' , null, array( 'class' => 'form-control datepicker')) }}

        </div>
    </div>
</div>









