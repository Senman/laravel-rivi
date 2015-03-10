<?php

class InvoiceChainCheckController extends BaseController
{


    public function index($id)
    {

        $user = Auth::user();
        $invoice =  $user->account->invoices()->findOrFail($id);



        return View::make('invoiceChainCheck.index')
            ->with('invoice', $invoice);


    }




    public function save($id)
    {

        $user = Auth::user();
        $invoice = $user->account->invoices()->findOrFail($id);

        $invoice->state = 'active';
        
        if (!$invoice->save()) {
            Session::flash('error', trans('message.invoiceChainCheck.save.error') );
            return Redirect::back()->withInput();
        }

        return Redirect::action('InvoiceController@index', $invoice->id);




    }





}
