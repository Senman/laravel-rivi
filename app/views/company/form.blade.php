<div class="row">
    <div class="col-md-6">

        <?php
        $template_form_data = [
            'name' => 'name',
            'value' => null,
            'label' => trans('message.company.name'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>


    <div class="col-md-6">

        <?php
        $template_form_data = [
            'name' => 'type',
            'value' => null,
            'label' => trans('message.company.type'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>


    <div class="col-md-3">

        <?php
        $template_form_data = [
            'name' => 'idn',
            'value' => null,
            'label' => trans('message.idn'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>


    <div class="col-md-3">

        <?php
        $template_form_data = [
            'name' => 'vat_idn',
            'value' => null,
            'label' => trans('message.vat_idn'),
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
            'name' => 'street',
            'value' => null,
            'label' => trans('message.street'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>

    <div class="col-md-3">

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

    <div class="col-md-2">

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

    <div class="col-md-2">

        <?php
        $template_form_data = [
            'name' => 'house_num',
            'value' => null,
            'label' => trans('message.house_num'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>




    <div class="col-md-3">

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
    <div class="col-md-6">

        <?php
        $template_form_data = [
            'name' => 'bank_account',
            'value' => null,
            'label' => trans('message.bank.account'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>

    <div class="col-md-6">

        <?php
        $template_form_data = [
            'name' => 'bank_name',
            'value' => null,
            'label' => trans('message.bank.name'),
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
            'name' => 'telephone',
            'value' => null,
            'label' => trans('message.telephone'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>

    <div class="col-md-6">

        <?php
        $template_form_data = [
            'name' => 'email',
            'value' => null,
            'label' => trans('message.email'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
</div>



<div class="col-md-6">
    <div class="form-group">
        <label for="is_supplier">{{ trans('messages.is_supplier') }}</label>
        {{ Form::checkbox('is_supplier' , null, array( 'class' => 'form-control')) }}
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="is_contractor">{{ trans('messages.is_contractor') }}</label>
        {{ Form::checkbox('is_contractor' , null, array( 'class' => 'form-control')) }}
    </div>
</div>





<div class="row">
    <div class="col-md-12">

        <?php
        $template_form_data = [
            'name' => 'rsi',
            'value' => null,
            'label' => trans('message.rsi'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>
</div>




