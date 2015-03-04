<div class="row">
    <div class="col-md-6">


        <?php
        $template_form_data = [
            'name' => 'supplier_name',
            'value' => $company->name,
            'label' => trans('message.supplier_idn'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>

</div>


<div class="row">
    <div class="col-md-6">


        <?php
        $template_form_data = [
            'name' => 'supplier_idn',
            'value' => $company->idn,
            'label' => trans('message.supplier_idn'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
    <div class="col-md-6">


        <?php
        $template_form_data = [
            'name' => 'supplier_vat_idn',
            'value' => $company->vat_idn,
            'label' => trans('message.supplier_vat_idn'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>

</div>


<div class="row">
    <div class="col-md-6">


        <?php
        $template_form_data = [
            'name' => 'supplier_street',
            'value' => $company->street,
            'label' => trans('message.supplier_street'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
    <div class="col-md-3">

        <?php
        $template_form_data = [
            'name' => 'supplier_house_num',
            'value' => $company->zip,
            'label' => trans('message.supplier_zip'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>


    <div class="col-md-3">
        <?php
        $template_form_data = [
            'name' => 'supplier_city',
            'value' => $company->city,
            'label' => trans('message.supplier_city'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )
    </div>


    <div class="col-md-3">
        <?php
        $template_form_data = [
            'name' => 'supplier_country',
            'value' => $company->country,
            'label' => trans('message.supplier_country'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )
    </div>


</div>


