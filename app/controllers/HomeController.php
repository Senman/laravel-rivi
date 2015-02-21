<?php

class HomeController extends BaseController {


	public function index()
	{
        return Redirect::action('InvoiceController@index');
	}


    public function about()
    {
        return View::make('hello');
    }

}
