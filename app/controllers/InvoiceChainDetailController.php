<?php

class InvoiceChainDetailController extends BaseController
{


    public function index($id)
    {

        $user = Auth::user();
        $invoice =  $user->account->invoices()->findOrFail($id);


        $invoice->issued_at = date('Y-m-d');

        $date = new DateTime(date('Y-m-d'));
        $date->add(new DateInterval('P20D')); // P1D means a period of 1 day
        $invoice->due_at = $date->format('Y-m-d');

        $invoice->vat_at = date('Y-m-d');


        return View::make('invoiceChainDetail.index')
            ->with('invoice', $invoice);


    }




    public function save($id)
    {

        $user = Auth::user();
        $invoice = $user->account->invoices()->findOrFail($id);

        if (!$invoice->update(Input::all())) {

            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        return Redirect::action('InvoiceChainCheckController@index', $invoice->id);




    }





}
