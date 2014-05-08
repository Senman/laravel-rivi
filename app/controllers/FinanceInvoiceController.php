<?php

class FinanceInvoiceController extends BaseController
{


    public function index()
    {

        $invoices = Invoice::all();
        return View::make('financeInvoice.index')->with('invoices', $invoices);
    }


    public function create()
    {

        $invoice = new Invoice();
        $companies = Company::lists('name', 'id');


        $invoice->date_issued =  date('Y-m-d');

        $date = new DateTime(date('Y-m-d'));
        $date->add(new DateInterval('P20D')); // P1D means a period of 1 day
        $invoice->due_date = $date->format('Y-m-d');

        $invoice->currency = 'Kč' ;

        $invoice->date_vat =  date('Y-m-d');

        $invoice->home_name  = 'Senman s.r.o.' ;
        $invoice->home_street  = 'Jugoslavskych Partyzanu 1580/21' ;
        $invoice->home_zip  = '160 00';
        $invoice->home_city  = 'Praha';
        $invoice->home_country  = 'Czech Republic';
        $invoice->home_id  = '24243485';
        $invoice->home_vid  = 'CZ24243485';

        return View::make('financeInvoice.create')
            ->with('invoice', $invoice)->with('companies', $companies);
    }


    public function edit($id)
    {
        $invoice = Invoice::find($id);
        $companies = Company::lists('name', 'id');

        return View::make('financeInvoice.edit')

            ->with('invoice', $invoice)->with('companies', $companies);
    }


    public function update($id)
    {

        $invoice = Invoice::find($id);


        if (!$invoice->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('FinanceInvoiceController@index');


    }


    public function save()
    {

        $invoice = new Invoice(Input::all());

        $year = 2014;

        $number =  Invoice::where('year',  $year)->max('number') + 0 ;

        $invoice->year = 2014 ;
        $invoice->pre_number= '';


        $invoice->pre_year= '';

        $invoice->number = $number + 1;

        $invoice->created_by = 'David Cerny' ;

        if (!$invoice->save()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Successfully created Project!');
        return Redirect::action('FinanceInvoiceController@index');


    }


    public function detail($id)
    {


        $invoice = Invoice::find($id);

        return View::make('financeInvoice.detail')

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
        return Redirect::action('FinanceInvoiceController@index');


    }




}
