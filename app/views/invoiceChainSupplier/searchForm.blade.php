{{ Form::open(array('action' => array('InvoiceChainSupplierController@index', $invoice->id), 'method' => 'get'   )) }}


<div class="row">


    <div class="col-md-2">

        <div class="form-group">



            {{ Form::text('type' , $type , array( 'class' => 'form-control', 'placeholder' => 'typ' )) }}

        </div>
    </div>


    <div class="col-md-2">

        <div class="form-group">



            {{ Form::text('name' , $name , array( 'class' => 'form-control', 'placeholder' => 'nazev' )) }}

        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">

            {{ Form::text('idn' , $idn, array( 'class' => 'form-control', 'placeholder' => 'IC' )) }}


        </div>
    </div>

    <div class="col-md-2">

        <button class="btn btn-default btn-block">Search</button>
    </div>
</div>

{{ Form::close() }}