<div class="form-group">

    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', Input::old('username'), array('class'=>'form-control', 'placeholder'=>'username')) }}


</div>


<div class="form-group">

    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}


</div>
