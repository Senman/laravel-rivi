<?php

class InvoiceChainSupplierController extends BaseController
{


    public function index($id)
    {


        $user = Auth::user();
        $invoice = $user->account->invoices()->findOrFail($id);

        $type = Input::get('type');
        $name = Input::get('name');
        $idn = Input::get('idn');


        $companies = $user->account->companies()->where("is_supplier", true)->paginate(15);




        return View::make('invoiceChainSupplier.index')
            ->with('companies', $companies)
            ->with('invoice', $invoice)

            ->with('type', $type)
            ->with('name', $name)
            ->with('idn', $idn);



    }

    public function confirm($id, $supplier_id)
    {

        $user = Auth::user();

        $invoice = $user->account->invoices()->findOrFail($id);
        $company = $user->account->companies()->findOrFail($supplier_id);


        return View::make('invoiceChainSupplier.confirm')
            ->with('company', $company)
            ->with('invoice', $invoice);

    }


    public function save($id)
    {

        $user = Auth::user();
        $invoice = $user->account->invoices()->findOrFail($id);




        if (!$invoice->update(Input::all())) {
            Session::flash('error', trans('message.invoiceChainSupplier.save.error') );
            return Redirect::back()->withInput();
        }

        return Redirect::action('InvoiceChainItemController@index', $invoice->id);

    }


}
