<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Název Společnosti</label>


            {{ Form::text('name' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="cid">IČ</label>
            {{ Form::text('cid' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>

    <div class="col-md-3">

        <div class="form-group">
            <label for="vatid">DIČ</label>
            {{ Form::text('vatid' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-4">

        <div class="form-group">
            <label for="street">Ulice</label>

            {{ Form::text('street' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>

    <div class="col-md-3">

        <div class="form-group">
            <label for="city">Město</label>
            {{ Form::text('city' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>

    <div class="col-md-2">

        <div class="form-group">
            <label for="zip">PSČ</label>
            {{ Form::text('zip' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>

    <div class="col-md-3">

        <div class="form-group">
            <label for="country">Země</label>
            {{ Form::text('country' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">


        <div class="form-group">
            <label for="bankAccount">Bankovní učet</label>
            {{ Form::text('bankAccount' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="bankName">Název banky</label>
            {{ Form::text('bankName' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>

</div>


<div class="row">
    <div class="col-md-6">

        <div class="form-group">
            <label for="telephone">Telefon</label>
            {{ Form::text('telephone' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>
    <div class="col-md-6">

        <div class="form-group">
            <label for="email">E-mail</label>
            {{ Form::text('email' , null, array( 'class' => 'form-control')) }}

        </div>

    </div>
</div>




