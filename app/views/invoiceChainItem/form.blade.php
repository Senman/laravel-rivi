
   <div class="col-md-5">

       <?php
       $template_form_data = [
           'name' => 'description',
           'value' => null,
           'label' => trans('message.description'),
           'placeholder' => '',
           'class' => ''];
       ?>
       @include('layoutForms.text', $template_form_data )


   </div>
    <div class="col-md-1">

        <?php
        $template_form_data = [
            'name' => 'count',
            'value' => null,
            'label' => trans('message.count'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )


    </div>

    <div class="col-md-3">

        <?php
        $template_form_data = [
            'name' => 'price',
            'value' => null,
            'label' => trans('message.price'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )


    </div>
    <div class="col-md-2">

        <?php
        $template_form_data = [
            'name' => 'vat',
            'value' => null,
            'label' => trans('message.vat'),
            'placeholder' => '',
            'class' => ''];
        ?>
        @include('layoutForms.text', $template_form_data )


    </div>


   <div class="col-md-1">
       <div class="form-group">
           <label for="account">&nbsp;</label>
           <button type="submit" class="btn btn-success form-control">Add</button>

       </div>
   </div>