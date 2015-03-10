<div class="row">
    <div class="col-md-6">
        <?php
        $template_form_data = [
            'name' => 'password',
            'value' => null,
            'label' => trans('message.password'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.password', $template_form_data )
    </div>



    <div class="col-md-6">

        <?php
        $template_form_data = [
            'name' => 'passwordConfirm',
            'value' => null,
            'label' => trans('message.password.again'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.password', $template_form_data )

    </div>
</div>