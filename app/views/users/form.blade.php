<div class="row">
    <div class="col-md-6">

        <?php
        $template_form_data = [
            'name' => 'firstName',
            'value' => null,
            'label' => trans('message.first.name'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )

    </div>

    <div class="col-md-6">

        <?php
        $template_form_data = [
            'name' => 'lastName',
            'value' => null,
            'label' => trans('message.last.name'),
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
            'name' => 'username',
            'value' => null,
            'label' => trans('message.username'),
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
            'name' => 'email',
            'value' => null,
            'label' => trans('message.email'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )
    </div>
</div>
