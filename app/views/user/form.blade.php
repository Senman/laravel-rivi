<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="firstName">Jméno</label>
            {{ Form::text('firstName' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>

    <div class="col-md-6">

        <div class="form-group">
            <label for="lastName">Příjmení</label>
            {{ Form::text('lastName' , null, array( 'class' => 'form-control')) }}
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="username">Uživatelské jméno</label>
            {{ Form::text('username' , null, array( 'class' => 'form-control')) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="email">Email</label>
            {{ Form::text('email' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>
</div>



