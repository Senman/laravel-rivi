<?php

class FinanceInvoiceController extends BaseController
{


    public function index()
    {
        return Redirect::action('AdminProjectController@index');
    }


}