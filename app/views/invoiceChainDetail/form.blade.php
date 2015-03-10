







    <div class="row">
        <div class="col-md-4">

            <?php
            $template_form_data = [
                'name' => 'issued_at',
                'value' => null,
                'label' => trans('message.date.issued'),
                'placeholder' => '',
                'class' => ''];
            ?>
            @include('layoutForms.datepicker', $template_form_data )

        </div>
        <div class="col-md-4">

            <?php
            $template_form_data = [
                'name' => 'due_at',
                'value' => null,
                'label' => trans('message.due.date'),
                'placeholder' => '',
                'class' => ''];
            ?>
            @include('layoutForms.datepicker', $template_form_data )

        </div>
        <div class="col-md-4">

            <?php
            $template_form_data = [
                'name' => 'vat_at',
                'value' => null,
                'label' => trans('message.date.vat'),
                'placeholder' => '',
                'class' => ''];
            ?>
            @include('layoutForms.datepicker', $template_form_data )

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









    <?php
    $template_form_data = [
        'name' => 'description',
        'value' => null,
        'label' => trans('message.description'),
        'placeholder' => '',
        'class' => ''];
    ?>
    @include('layoutForms.textarea', $template_form_data )




