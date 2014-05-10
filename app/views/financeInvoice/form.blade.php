<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="name">Nazev</label>
            {{ Form::text('name' , null, array( 'class' => 'form-control')) }}

        </div>


    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="language">language</label>
            {{ Form::select('language', array('cz' => 'cz', 'en' => 'en'), null, array('class' => 'form-control')) }}

        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="date_issued">date_issued</label>
            {{ Form::text('date_issued' , null, array( 'class' => 'form-control datepicker')) }}

        </div>

    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="due_date">due_date</label>
            {{ Form::text('due_date' , null, array( 'class' => 'form-control datepicker')) }}

        </div>

    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="date_vat">date_vat</label>
            {{ Form::text('date_vat' , null, array( 'class' => 'form-control datepicker')) }}

        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <h3>Odběratel</h3>


        <div class="form-group">
            <label for="company_name">company_name</label>
            {{ Form::text('company_name' , null, array( 'class' => 'form-control')) }}

        </div>
        <div class="form-group">
            <label for="company_street">company_street</label>
            {{ Form::text('company_street' , null, array( 'class' => 'form-control')) }}

        </div>
        <div class="form-group">
            <label for="company_zip">company_zip</label>
            {{ Form::text('company_zip' , null, array( 'class' => 'form-control')) }}

        </div>
        <div class="form-group">
            <label for="company_city">company_city</label>
            {{ Form::text('company_city' , null, array( 'class' => 'form-control')) }}

        </div>

        <div class="form-group">
            <label for="company_country">company_country</label>
            {{ Form::text('company_country' , null, array( 'class' => 'form-control')) }}

        </div>
        <div class="form-group">
            <label for="company_num">company_num</label>
            {{ Form::text('company_num' , null, array( 'class' => 'form-control')) }}

        </div>
        <div class="form-group">
            <label for="company_vat_num">company_vat_num</label>
            {{ Form::text('company_vat_num' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>

    <div class="col-md-6">
        <h3>Dodavatel</h3>

        <div class="form-group">
            <label for="home_name">home_name</label>
            {{ Form::text('home_name' , null, array( 'class' => 'form-control')) }}

        </div>
        <div class="form-group">
            <label for="home_street">home_street</label>
            {{ Form::text('home_street' , null, array( 'class' => 'form-control')) }}

        </div>


        <div class="form-group">
            <label for="home_zip">home_zip</label>
            {{ Form::text('home_zip' , null, array( 'class' => 'form-control')) }}

        </div>


        <div class="form-group">
            <label for="home_city">home_city</label>
            {{ Form::text('home_city' , null, array( 'class' => 'form-control')) }}

        </div>


        <div class="form-group">
            <label for="home_country">home_country</label>
            {{ Form::text('home_country' , null, array( 'class' => 'form-control')) }}

        </div>


        <div class="form-group">
            <label for="home_id">home_id</label>
            {{ Form::text('home_id' , null, array( 'class' => 'form-control')) }}

        </div>

        <div class="form-group">
            <label for="home_vid">home_vid</label>
            {{ Form::text('home_vid' , null, array( 'class' => 'form-control')) }}

        </div>


    </div>
</div>

<div class="row">
    <div class="col-md-4">


        <div class="form-group">
            <label for="currency">Měna</label>
            {{ Form::text('currency' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="account">Způsob uradhy</label>
            {{ Form::select('payment_type', array('Bankovní převod' => 'Bankovní převod'), null , array( 'class' =>
            'form-control')) }}

        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label for="account">Učet</label>


            {{ Form::select('_account_id', $accounts, null , array( 'class' =>
            'form-control')) }}



        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">

        <div class="form-group">
            <label for="symbol_constant">Konstantni symbol</label>
            {{ Form::text('symbol_constant' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="symbol_variable">Variabilni symbol</label>
            {{ Form::text('symbol_variable' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="symbol_specific">Specificky symbol</label>
            {{ Form::text('symbol_specific' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>
</div>








<div class="form-group">
    <label for="description">description</label>
    {{ Form::textarea('description' , null, array( 'class' => 'form-control', 'rows' => '3')) }}

</div>































