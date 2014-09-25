<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="username">Telefon</label>
            {{ Form::text('telephone' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="email">Adresa</label>
            {{ Form::text('addressFirstLine' , null, array( 'class' => 'form-control')) }}
            <br/>
            {{ Form::text('addressSecondLine' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="firstName">PSC</label>
            {{ Form::text('zip' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>

    <div class="col-md-6">

        <div class="form-group">
            <label for="lastName">Město</label>
            {{ Form::text('country' , null, array( 'class' => 'form-control')) }}
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="email">Země</label>
            {{ Form::text('country' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="email">Bankovní učet</label>
            {{ Form::text('bankAccount' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="email">Název banky</label>
            {{ Form::text('bankName' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="email">Národnost</label>
            {{ Form::text('nationality' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>
</div>


