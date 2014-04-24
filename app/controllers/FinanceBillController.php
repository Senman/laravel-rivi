<?php

class FinanceBillController extends BaseController
{


    public function index()
    {
        return Redirect::action('AdminProjectController@index');
    }


}