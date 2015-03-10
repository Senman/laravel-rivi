<?php

class InvoiceChainLanguageController extends BaseController
{


    public function choose($id)
    {
        $user = Auth::user();
        $invoice =  $user->account->invoices()->findOrFail($id);

        return View::make('invoiceChainLanguage.choose')
            ->with('invoice', $invoice);

    }


    public function save($id)
    {



        $user = Auth::user();
        $invoice =  $user->account->invoices()->findOrFail($id);

       // $language = Input::get('language');
       // $invoice->language = $language;


        if (!$invoice->update(Input::all())) {
            Session::flash('error', trans('message.invoiceChainLanguage.save.error') );
            return Redirect::back()->withInput();
        }

        return Redirect::action('InvoiceChainSupplierController@search', $invoice->id);

    }





}
