
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