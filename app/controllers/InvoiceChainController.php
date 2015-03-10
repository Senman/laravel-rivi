<?php

class InvoiceChainController extends BaseController
{


    public function create()
    {


        $currentYear = date("Y");
        $prevYear = $currentYear - 1;
        $nextYear = $currentYear + 1 ;

        $years = array($nextYear =>  $nextYear,  $currentYear => $currentYear,  $prevYear =>  $prevYear   );


        $currency = array('czk' =>  'Kč'   );



        return View::make('invoiceChain.create')
            ->with('years', $years)
        ->with('currentYear', $currentYear)
            ->with('currency', $currency);



    }

    public function save()
    {

        $user = Auth::user();
        $invoice = new Invoice(Input::all());

        $year = Input::get('year');

        $number = Invoice::where('year', $year)->max('number') + 0;
        $invoice->year = $year;
        $invoice->pre_number = '';
        $invoice->pre_year = '';
        $invoice->number = $number + 1;
        $invoice->symbol_variable = $invoice->pre_year . $invoice->year . $invoice->pre_number . sprintf("%03d", $invoice->number);


        if (!$user->account->invoices()->save($invoice)) {
           Session::flash('error', trans('message.invoiceChain.save.error') );
            return Redirect::back()->withInput();
        }
        return Redirect::action('InvoiceChainContractorController@index', $invoice->id);



    }











    public function confirm()
    {


    }



    public function cancel()
    {


    }



}
