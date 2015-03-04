<?php

class InvoiceChainItemController extends BaseController
{


    public function index($id)
    {


        $user = Auth::user();
        $invoice = $user->account->invoices()->findOrFail($id);


        return View::make('invoiceChainItem.index')

            ->with('invoice', $invoice);


    }

    public function add($id)
    {

        $user = Auth::user();
        $invoice = $user->account->invoices()->findOrFail($id);


        $invoiceItem = new InvoiceItem(Input::all());

        if (!$invoice->invoiceItems()->save($invoiceItem)) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Successfully created Invoice!');
        return Redirect::action('InvoiceChainItemController@index', $invoice->id);

    }

    public function remove($id)
    {

        $item_id = Input::get('id');

        $user = Auth::user();
        $invoice = $user->account->invoices()->findOrFail($id);


        $item = $invoice->invoiceItems()->findOrFail($item_id);


        if (!$item->delete()) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }


        Session::flash('message', 'Successfully created Invoice!');
        return Redirect::action('InvoiceChainItemController@index', $invoice->id);

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }




    public function up($id)
    {

        //get previous idx (sort asx < x) get first
        // if not null exchange idx
        //save first , save second
    }


    public function down($id)
    {

        //get previous idx (sort desc > x) get first
        // if not null exchange idx
        //save first , save second
    }


}
