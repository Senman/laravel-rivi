<?php

class InvoiceChainContractorController extends BaseController
{



    public function index($id)
    {

        $user = Auth::user();
        $invoice =  $user->account->invoices()->findOrFail($id);

        $type = Input::get('type');
        $name = Input::get('name');
        $idn = Input::get('idn');


        $companies = $user->account->companies()->where("is_contractor", true)->paginate(15);


        return View::make('invoiceChainContractor.index')
            ->with('companies', $companies)
            ->with('invoice', $invoice)


            ->with('type', $type)
            ->with('name', $name)
            ->with('idn', $idn);

    }


    public function confirm($id, $contractor_id)
    {

        $user = Auth::user();

        $invoice =  $user->account->invoices()->findOrFail($id);
        $company =  $user->account->companies()->findOrFail($contractor_id);



        return View::make('invoiceChainContractor.confirm')
            ->with('company', $company)
            ->with('invoice', $invoice);

    }



    public function save($id)
    {

        $user = Auth::user();
        $invoice =  $user->account->invoices()->findOrFail($id);

        if (!$invoice->update(Input::all())) {
            Session::flash('error', trans('message.invoiceChainContractor.save.error') );
            return Redirect::back()->withInput();
        }

        return Redirect::action('InvoiceChainSupplierController@index', $invoice->id);

    }






}
