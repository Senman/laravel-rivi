<?php

class InvoiceController extends BaseController
{


    public function index()
    {

        $user = Auth::user();
        $invoices = $user->account->invoices()->orderBy('year', 'desc')->orderBy('number', 'desc')->paginate(10);
        return View::make('invoice.index')->with('invoices', $invoices);


    }


    public function chooseSupplier()
    {

        $user = Auth::user();
        $account =  $user->account;
        $companies =  $account->companies()->where("is_supplier", true)->paginate(15);


        return View::make('invoice.createFirst')
            ->with('companies', $companies);

    }


    public function chooseContractor()
    {

        $user = Auth::user();
        $account =  $user->account;
        $companies =  $account->companies()->where("is_contractor", true)->paginate(15);


        return View::make('invoice.createFirst')
            ->with('companies', $companies);

    }



    public function createSecond($id)
    {

        $user = Auth::user();
        $company = $user->account->companies()->findOrFail($id);




        $invoice = new Invoice();

        $invoice->company = $company;

        $invoice->issued_at = date('Y-m-d');

        $date = new DateTime(date('Y-m-d'));
        $date->add(new DateInterval('P20D')); // P1D means a period of 1 day
        $invoice->due_at = $date->format('Y-m-d');
        $invoice->currency = 'Kč';

        $invoice->vat_at = date('Y-m-d');

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
            Session::flash('error', trans('message.invoice.add.error') );
            return Redirect::back()->withInput();
        }

        Session::flash('message', trans('messages.invoice.add.success'));
        return Redirect::action('InvoiceController@createThird', $item->invoice->id);

    }


    public function remove()
    {

        $id = Input::get('id');
        $item = Item::find($id);

        $invoice_id = $item->invoice->id;


        if (!$item->delete()) {
            Session::flash('error', trans('message.invoice.remove.error') );
            return Redirect::back();
        }

        Session::flash('message', trans('messages.invoice.remove.success'));
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
            Session::flash('error', trans('message.invoice.update.error') );
            return Redirect::back()->withInput();
        }
        Session::flash('message', trans('messages.invoice.update.success'));
        return Redirect::action('InvoiceController@index');


    }


    public function save()
    {

        $user = Auth::user();
        $invoice = new Invoice(Input::all());

       // $account_id =Input::get("account_id");

       // $account = Account::find($account_id);


        $year =  date("Y");;

        $number = Invoice::where('year', $year)->max('number') + 0;


        /*$invoice->bankAccount	 = $account->number;
        $invoice->bankName = $account->name;
        $invoice->bankSwift = $account->swift;
        $invoice->bankIban = $account->iban;
        $invoice->bankAddress = $account->address;
        //$invoice->bankAccount

        */


        $invoice->state = 'unpaid';

        $invoice->year = $year;
        $invoice->pre_number = '';
        $invoice->pre_year = '';
        $invoice->number = $number + 1;

        $invoice->symbol_variable = $invoice->pre_year . $invoice->year . $invoice->pre_number . sprintf("%03d", $invoice->number);

        $invoice->created_by = Auth::user()->firstName . ' ' . Auth::user()->lastName;



        if (!$company = $user->account->invoices()->save($invoice)) {
            Session::flash('error', trans('message.invoice.save.error') );
            return Redirect::back()->withInput();
        }

        Session::flash('message', trans('messages.invoice.save.success'));
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
            Session::flash('error', trans('message.invoice.delete.error') );
            return Redirect::back();
        }

        Session::flash('message', trans('messages.invoice.delete.success'));
        return Redirect::action('InvoiceController@index');

    }


    public function changeState()
    {

        $id = Input::get('id');
        $invoice = Invoice::find($id);

        $state = Input::get('state');

        if (!$invoice->update(array('state' => $state))) {
            Session::flash('error', trans('message.invoice.changeState.error') );
            return Redirect::back()->withInput();
        }
        Session::flash('message', trans('messages.invoice.changeState.success'));
        return Redirect::action('InvoiceController@detail', $id);


    }


}
