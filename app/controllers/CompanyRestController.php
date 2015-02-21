<?php

class CompanyRestController extends BaseController
{

    public function invoices($company_rsi)
    {
        $company = Company::where('rsi', $company_rsi)->firstOrFail();


        $invoices = $company->invoices;


        try {

            $response = [
                'company' => [

                    'id' => $company->id,
                    'name' => $company->name


                ],
                'invoices' => []
            ];


            foreach ($invoices as $invoice) {

                $response['invoices'][] = [

                    'id' => $invoice->id,

                    'number' => $invoice->pre_year . $invoice->year . $invoice->pre_number . sprintf("%03d", $invoice->number),


                    'name' => $invoice->name,
                    'date_issued' => $invoice->date_issued,
                    'due_date' => $invoice->due_date,

                    'priceTotal' => $invoice->priceTotal,
                    'priceVatTotal' => $invoice->priceVatTotal,

                    'billsIncomeTotal' => $invoice->billsIncomeTotal,


                    'state' => $invoice->state,

                    'currency' => $invoice->currency


                ];


            }

            $statusCode = 200;


        } catch (Exception $e) {
            $statusCode = 404;
        }
        return Response::json($response, $statusCode)->header('Access-Control-Allow-Origin', '*');


    }


}