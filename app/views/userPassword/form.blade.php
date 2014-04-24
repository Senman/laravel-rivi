<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="password">Heslo</label>
            {{ Form::password('password' , array( 'class' => 'form-control')) }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="passwordConfirm">Heslo znovu</label>
            {{ Form::password('passwordConfirm' , array( 'class' => 'form-control')) }}

        </div>
    </div>
</div>