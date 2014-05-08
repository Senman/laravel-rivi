



{{ link_to_action('FinanceInvoiceController@edit', 'Editovat projekt', array($invoice->id), array('class' => 'btn btn-default btn-block') )}}

<br>


{{ Form::open(array('action' => array('FinanceInvoiceController@delete'))) }}


{{ Form::hidden('_method', 'DELETE') }}

{{ Form::hidden('id', $invoice->id) }}
{{ Form::submit('Smazat', array('class' => 'btn btn-danger btn-block' , 'onclick' =>'return confirm("Are you sure?")' )) }}
{{ Form::close() }}
