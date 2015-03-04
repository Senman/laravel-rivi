<div class="row">
    <div class="col-md-8">

        <?php
        $template_form_data = [
            'name' => 'name',
            'value' => null,
            'label' => trans('message.name'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
    <div class="col-md-4">

        <?php
        $template_form_data = [
            'name' => 'language',
            'items' => array('cz' => 'cz', 'en' => 'en'),
            'selected' => null,
            'label' => trans('message.language'),
            'class' => ''];
        ?>
        @include('layoutForms.select', $template_form_data )

    </div>
</div>



<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="date_issued">{{ trans('messages.date.issued') }}</label>
            {{ Form::text('issued_at' , null, array( 'class' => 'form-control datepicker')) }}

        </div>


    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="due_date">{{ trans('messages.due.date') }}</label>
            {{ Form::text('due_at' , null, array( 'class' => 'form-control datepicker')) }}

        </div>


    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="date_vat">{{ trans('messages.date.vat') }}</label>
            {{ Form::text('vat_at' , null, array( 'class' => 'form-control datepicker')) }}

        </div>


    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <h3>Odběratel</h3>

        <?php
        $template_form_data = [
            'name' => 'company_name',
            'value' => null,
            'label' => trans('message.company.name'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

        <?php
        $template_form_data = [
            'name' => 'street',
            'value' => null,
            'label' => trans('message.street'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

        <?php
        $template_form_data = [
            'name' => 'company_zip',
            'value' => null,
            'label' => trans('message.zip'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

        <?php
        $template_form_data = [
            'name' => 'company_city',
            'value' => null,
            'label' => trans('message.city'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

        <?php
        $template_form_data = [
            'name' => 'company_country',
            'value' => null,
            'label' => trans('message.country'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

        <?php
        $template_form_data = [
            'name' => 'company_idn',
            'value' => null,
            'label' => trans('message.company.num'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

        <?php
        $template_form_data = [
            'name' => 'company_vat_idn',
            'value' => null,
            'label' => trans('message.company.vat.num'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>

    <div class="col-md-6">
        <h3>{{ trans('messages.provider') }}</h3>

        <?php
        $template_form_data = [
            'name' => 'home_name',
            'value' => null,
            'label' => trans('message.home.name'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

        <?php
        $template_form_data = [
            'name' => 'home_street',
            'value' => null,
            'label' => trans('message.street'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

        <?php
        $template_form_data = [
            'name' => 'home_zip',
            'value' => null,
            'label' => trans('message.zip'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

        <?php
        $template_form_data = [
            'name' => 'home_city',
            'value' => null,
            'label' => trans('message.city'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

        <?php
        $template_form_data = [
            'name' => 'home_country',
            'value' => null,
            'label' => trans('message.country'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

        <?php
        $template_form_data = [
            'name' => 'home_idn',
            'value' => null,
            'label' => trans('message.home.id'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

        <?php
        $template_form_data = [
            'name' => 'home_vat_idn',
            'value' => null,
            'label' => trans('message.home.vat.id'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
</div>

<div class="row">
    <div class="col-md-4">

        <?php
        $template_form_data = [
            'name' => 'currency',
            'value' => null,
            'label' => trans('message.currency'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>

    <div class="col-md-4">

        <?php
        $template_form_data = [
            'name' => 'payment_type',
            'items' => array('bankTransfer' => 'Bankovní převod', 'cash' => 'V hotovosti' ),
            'selected' => null,
            'label' => trans('message.payment.type'),
            'class' => ''];
        ?>
        @include('layoutForms.select', $template_form_data )

    </div>


    <div class="col-md-4">

        <?php
        $template_form_data = [
            'name' => 'account_id',
            'items' => $accounts,
            'selected' => null,
            'label' => trans('message.account'),
            'class' => ''];
        ?>
        @include('layoutForms.select', $template_form_data )

    </div>
</div>

<div class="row">
    <div class="col-md-4">

        <?php
        $template_form_data = [
            'name' => 'symbol_constant',
            'value' => null,
            'label' => trans('message.constant.symbol'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
    <div class="col-md-4">

        <?php
        $template_form_data = [
            'name' => 'symbol_variable',
            'value' => null,
            'label' => trans('message.variable.symbol'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
    <div class="col-md-4">

        <?php
        $template_form_data = [
            'name' => 'symbol_specific',
            'value' => null,
            'label' => trans('message.specific.symbol'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
</div>








<div class="form-group">
    <label for="description">{{ trans('messages.description') }}</label>
    {{ Form::textarea('description' , null, array( 'class' => 'form-control', 'rows' => '3')) }}

</div>

<?php
$template_form_data = [
    'name' => 'description',
    'value' => null,
    'label' => trans('message.description'),
    'placeholder' => '',
    'class' => ''];
?>
@include('layoutForms.textarea', $template_form_data )































