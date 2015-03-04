<?php

class InvoiceController extends BaseController
{


    public function index()
    {

        $user = Auth::user();
        $invoices = $user->account->invoices()->orderBy('year', 'desc')->orderBy('number', 'desc')->paginate(10);
        return View::make('invoice.index')->with('invoices', $invoices);


    }





    public function printInvoice($id)
    {
        $user = Auth::user();
        $invoice = $user->account->invoices()->find($id);


        /*  return View::make('invoice.print')

              ->with('invoice', $invoice);
          */

        //  return PDF::html('invoice.print', array('invoice' => $invoice));
        //   return PDF::load($html, 'A4', 'portrait')->download('my_pdf');

        $html=View::make('invoice.print')->with('invoice', $invoice)->render();
        //$html=mb_convert_encoding($html, "iso-8859-2", "utf8");
        //var_dump(mb_detect_encoding($html));die();


        $pdf = PDF::loadHtml($html);

        //$pdf->render();
        //var_dump($pdf);die();

        return $pdf->stream();
    }





    public function detail($id)
    {

        $user = Auth::user();
        $invoice = $user->account->invoices()->find($id);

        $invoice = Invoice::find($id);

        return View::make('invoice.detail')

            ->with('invoice', $invoice);


    }


    public function delete()
    {

        $id = Input::get('id');
        $invoice = Invoice::find($id);


        if (!$invoice->delete()) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }

        Session::flash('message', 'Successfully deleted!');
        return Redirect::action('InvoiceController@index');

    }


    public function changeState()
    {

        $id = Input::get('id');
        $user = Auth::user();
        $invoice = $user->account->invoices()->find($id);

        $state = Input::get('state');

        if (!$invoice->update(array('state' => $state))) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('InvoiceController@detail', $id);


    }


}
