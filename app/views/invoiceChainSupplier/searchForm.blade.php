{{ Form::open(array('action' => array('InvoiceChainSupplierController@index', $invoice->id), 'method' => 'get'   )) }}


<div class="row">


    <div class="col-md-2">

        <?php
        $template_form_data = [
            'name' => 'type',
            'value' => $type,
            'label' => '',
            'placeholder' => trans('message.type'),
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>


    <div class="col-md-2">

        <?php
        $template_form_data = [
            'name' => 'name',
            'value' => $name,
            'label' => '',
            'placeholder' => trans('message.name'),
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )
    </div>

    <div class="col-md-2">

        <?php
        $template_form_data = [
            'name' => 'idn',
            'value' => $idn,
            'label' => '',
            'placeholder' => trans('message.idn'),
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>

    <div class="col-md-2">

        <button class="btn btn-default btn-block">Search</button>
    </div>
</div>

{{ Form::close() }}