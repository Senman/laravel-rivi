
{{ link_to_action('InvoiceController@printInvoice', trans('messages.print'), array($invoice->id), array('class' => 'btn btn-default btn-block') )}}
<br>


{{ Form::open(array('action' => array('InvoiceController@delete'))) }}


{{ Form::hidden('_method', 'DELETE') }}

{{ Form::hidden('id', $invoice->id) }}
{{ Form::submit(trans('messages.delete'), array('class' => 'btn btn-danger btn-block' , 'onclick' =>'return confirm(trans("messages.are.you.sure"))' )) }}
{{ Form::close() }}
<br>


{{ Form::open(array('action' => array('InvoiceController@changeState'))) }}


<hr>


<div class="row">
    <div class="col-md-8">

        <?php
        $template_form_data = [
            'name' => 'state',
            'value' => array('unpaid' => 'unpaid', 'paid' => 'paid', 'storno' => 'storno' ),
            'label' => trans('message.state.of.payment'),
            'placeholder' => Input::old('payment_type'),
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="payment_type">&nbsp; </label>
        {{ Form::submit(trans('messages.change'), array('class' => 'btn btn-primary btn-block form-control' )) }}
        </div>

    </div>

</div>

{{ Form::close() }}
