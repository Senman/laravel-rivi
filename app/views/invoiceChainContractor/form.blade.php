<div class="row">
    <div class="col-md-6">


        <?php
        $template_form_data = [
            'name' => 'contractor_name',
            'value' => $company->name,
            'label' => trans('message.contractor_idn'),
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
            'name' => 'contractor_idn',
            'value' => $company->idn,
            'label' => trans('message.contractor_idn'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
    <div class="col-md-6">


        <?php
        $template_form_data = [
            'name' => 'contractor_vat_idn',
            'value' => $company->vat_idn,
            'label' => trans('message.contractor_vat_idn'),
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
            'name' => 'contractor_street',
            'value' => $company->street,
            'label' => trans('message.contractor_street'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
    <div class="col-md-3">

        <?php
        $template_form_data = [
            'name' => 'contractor_house_num',
            'value' => $company->zip,
            'label' => trans('message.contractor_zip'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>


    <div class="col-md-3">
        <?php
        $template_form_data = [
            'name' => 'contractor_city',
            'value' => $company->city,
            'label' => trans('message.contractor_city'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )
    </div>


    <div class="col-md-3">
        <?php
        $template_form_data = [
            'name' => 'contractor_country',
            'value' => $company->country,
            'label' => trans('message.contractor_country'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )
    </div>


</div>


