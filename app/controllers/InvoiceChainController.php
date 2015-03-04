<?php

class InvoiceChainController extends BaseController
{





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





    public function add()
    {
        $item = new Item(Input::all());

        if (!$item->save()) {
            Session::flash('error', trans('message.invoiceChain.add.error') );
            return Redirect::back()->withInput();
        }

        Session::flash('message', trans('messages.invoiceChain.add.success'));
        return Redirect::action('InvoiceController@createThird', $item->invoice->id);

    }


    public function remove()
    {

        $id = Input::get('id');
        $item = Item::find($id);

        $invoice_id = $item->invoice->id;


        if (!$item->delete()) {
            Session::flash('error', trans('message.invoiceChain.remove.error') );
            return Redirect::back();
        }

        Session::flash('message', trans('messages.invoiceChain.remove.success'));
        return Redirect::action('InvoiceController@createThird', $invoice_id);

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
            Session::flash('error', trans('message.invoiceChain.save.error') );
            return Redirect::back()->withInput();
        }

        Session::flash('message', trans('messages.invoiceChain.save.success'));
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
            Session::flash('error', trans('message.invoiceChain.delete.error') );
            return Redirect::back();
        }

        Session::flash('message', trans('messages.invoiceChain.delete.success'));
        return Redirect::action('InvoiceController@index');

    }




}
