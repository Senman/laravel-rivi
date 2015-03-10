<div class="row">
    <div class="col-md-12">

        <?php
        $template_form_data = [
            'name' => 'telephone',
            'value' => null,
            'label' => trans('message.telephone'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <?php
        $template_form_data = [
            'name' => 'addressFirstLine',
            'value' => null,
            'label' => trans('message.address'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

        <?php
        $template_form_data = [
            'name' => 'addressSecondLine',
            'value' => null,
            'label' => '',
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
            'name' => 'zip',
            'value' => null,
            'label' => trans('message.zip'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>

    <div class="col-md-6">

        <?php
        $template_form_data = [
            'name' => 'city',
            'value' => null,
            'label' => trans('message.city'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <?php
        $template_form_data = [
            'name' => 'country',
            'value' => null,
            'label' => trans('message.country'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <?php
        $template_form_data = [
            'name' => 'bankAccount',
            'value' => null,
            'label' => trans('message.bank.account'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <?php
        $template_form_data = [
            'name' => 'bankName',
            'value' => null,
            'label' => trans('message.bank.name'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <?php
        $template_form_data = [
            'name' => 'nationality',
            'value' => null,
            'label' => trans('message.nationality'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
</div>


