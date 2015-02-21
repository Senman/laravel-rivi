<?php

class InvoiceController extends BaseController
{


    public function index()
    {

        $invoices = Invoice::orderBy('year', 'desc')->orderBy('number', 'desc')->paginate(10);
        return View::make('invoice.index')->with('invoices', $invoices);


    }


    public function createFirst()
    {



        return View::make('invoice.createFirst');
          //  ->with('companies', $companies);

    }


    public function createSecond($id)
    {


        $company = Company::find($id);

        $invoice = new Invoice();

        $invoice->company = $company;

        $invoice->date_issued = date('Y-m-d');

        $date = new DateTime(date('Y-m-d'));
        $date->add(new DateInterval('P20D')); // P1D means a period of 1 day
        $invoice->due_date = $date->format('Y-m-d');

        $invoice->currency = 'Kč';
        $invoice->date_vat = date('Y-m-d');

        $invoice->home_name = 'Senman s.r.o.';
        $invoice->home_street = 'Argentinská 38';
        $invoice->home_zip = '170 00';
        $invoice->home_city = 'Praha';
        $invoice->home_country = 'Czech Republic';
        $invoice->home_id = '24243485';
        $invoice->home_vid = 'CZ24243485';

        $invoice->company_name = $company->name;
        $invoice->company_street = $company->street;
        $invoice->company_zip = $company->zip;
        $invoice->company_city = $company->city;
        $invoice->company_country = $company->country;
        $invoice->company_num = $company->cid;
        $invoice->company_vat_num = $company->vatid;

        $accounts = Account::lists('name', 'id');


        return View::make('invoice.createSecond')
            ->with('invoice', $invoice)->with('accounts', $accounts);
    }


    public function createThird($id)
    {
        $invoice = Invoice::find($id);

        return View::make('invoice.createThird')

            ->with('invoice', $invoice);
    }


    public function createFinish($id)
    {


        $invoice = Invoice::find($id);

        return View::make('invoice.detail')

            ->with('invoice', $invoice);

    }

    public function printInvoice($id)
    {
        $invoice = Invoice::find($id);


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


    public function add()
    {
        $item = new Item(Input::all());

        if (!$item->save()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Successfully created Invoice!');
        return Redirect::action('InvoiceController@createThird', $item->invoice->id);

    }


    public function remove()
    {

        $id = Input::get('id');
        $item = Item::find($id);

        $invoice_id = $item->invoice->id;


        if (!$item->delete()) {
            Session::flash('message', 'Error!');
            return Redirect::back();
        }


        Session::flash('message', 'Successfully created Invoice!');
        return Redirect::action('InvoiceController@createThird', $invoice_id);

    }




    public function edit($id)
    {
        $invoice = Invoice::find($id);
        $companies = Company::lists('name', 'id');

        $accounts = Account::lists('name', 'id');

        return View::make('invoice.edit')

            ->with('invoice', $invoice)->with('companies', $companies)->with('accounts', $accounts);
    }


    public function update($id)
    {

        $invoice = Invoice::find($id);

        $account_id =Input::get("account_id");

        $account = Account::find($account_id);



        $invoice->bankAccount	 = $account->number;
        $invoice->bankName = $account->name;
        $invoice->bankSwift = $account->swift;
        $invoice->bankIban = $account->iban;

        $invoice->bankAddress = $account->address;



        if (!$invoice->update(Input::all())) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('InvoiceController@index');


    }


    public function save()
    {

        $invoice = new Invoice(Input::all());

        $account_id =Input::get("account_id");

        $account = Account::find($account_id);


        $year =  date("Y");;

        $number = Invoice::where('year', $year)->max('number') + 0;


        $invoice->bankAccount	 = $account->number;
        $invoice->bankName = $account->name;
        $invoice->bankSwift = $account->swift;
        $invoice->bankIban = $account->iban;

        $invoice->bankAddress = $account->address;
        //$invoice->bankAccount

        $invoice->state = 'unpaid';

        $invoice->year = $year;
        $invoice->pre_number = '';
        $invoice->pre_year = '';
        $invoice->number = $number + 1;

        $invoice->symbol_variable = $invoice->pre_year . $invoice->year . $invoice->pre_number . sprintf("%03d", $invoice->number);

        $invoice->created_by = Auth::user()->firstName . ' ' . Auth::user()->lastName;

        if (!$invoice->save()) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }

        Session::flash('message', 'Successfully created Invoice!');
        return Redirect::action('InvoiceController@createThird', $invoice->id);


    }


    public function detail($id)
    {


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
        $invoice = Invoice::find($id);

        $state = Input::get('state');

        if (!$invoice->update(array('state' => $state))) {
            Session::flash('message', 'Error!');
            return Redirect::back()->withInput();
        }
        Session::flash('message', 'Successfully Updated!');
        return Redirect::action('InvoiceController@detail', $id);


    }


}
