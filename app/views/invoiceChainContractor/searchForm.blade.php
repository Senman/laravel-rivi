{{ Form::open(array('action' => array('InvoiceChainContractorController@index', $invoice->id), 'method' => 'get'   )) }}


<div class="row">


    <div class="col-md-2">

        <?php
        $template_form_data = [
            'name' => 'type',
            'value' => $type,
            'label' => '',
            'placeholder' => 'typ',
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
            'placeholder' => 'nazev',
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
            'placeholder' => 'IC',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>





    <div class="col-md-2">

        <button class="btn btn-default btn-block">Search</button>
    </div>
</div>

{{ Form::close() }}