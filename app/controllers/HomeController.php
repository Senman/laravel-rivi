<?php

class HomeController extends BaseController {


	public function index()
	{
		return View::make('hello');
	}


    public function about()
    {
        return View::make('hello');
    }

}
