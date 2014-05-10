{{ link_to_action('FinanceInvoiceController@edit', 'Editovat fakturu', array($invoice->id), array('class' => 'btn btn-default btn-block') )}}


{{ link_to_action('FinanceInvoiceController@edit', 'Editovat položky', array($invoice->id), array('class' => 'btn btn-default btn-block') )}}


{{ link_to_action('FinanceInvoiceController@printInvoice', 'Tisk', array($invoice->id), array('class' => 'btn btn-default btn-block') )}}
<br>


{{ Form::open(array('action' => array('FinanceInvoiceController@delete'))) }}


{{ Form::hidden('_method', 'DELETE') }}

{{ Form::hidden('id', $invoice->id) }}
{{ Form::submit('Smazat', array('class' => 'btn btn-danger btn-block' , 'onclick' =>'return confirm("Are you sure?")' )) }}
{{ Form::close() }}
<br>


{{ Form::open(array('action' => array('FinanceInvoiceController@changeState'))) }}
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="payment_type">Stav faktury </label>

            {{ Form::hidden('_method', 'Post') }}
            {{ Form::hidden('id', $invoice->id) }}

            {{ Form::select('state', array('unpaid' => 'unpaid', 'paid' => 'paid', 'storno' => 'storno' ) ,
            Input::old('payment_type') , array( 'class' =>
            'form-control')) }}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="payment_type">&nbsp; </label>
        {{ Form::submit('Změnit', array('class' => 'btn btn-primary btn-block form-control' )) }}
        </div>

    </div>

</div>

{{ Form::close() }}
