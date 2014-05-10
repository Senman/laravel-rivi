
   <div class="col-md-5">
        <div class="form-group">
            <label for="currency">Popis</label>
            {{ Form::text('description' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>
    <div class="col-md-1">
        <div class="form-group">
            <label for="currency_transform">Počet</label>
            {{ Form::text('count' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="currency_transform">Cena</label>
            {{ Form::text('price' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="account">DPH</label>
            {{ Form::text('vat' , null, array( 'class' => 'form-control')) }}

        </div>
    </div>


   <div class="col-md-1">
       <div class="form-group">
           <label for="account">&nbsp;</label>
           <button type="submit" class="btn btn-success form-control">Add</button>

       </div>
   </div>