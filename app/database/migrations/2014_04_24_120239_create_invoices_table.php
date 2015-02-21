<?php

use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function ($table) {

            $table->engine = 'InnoDB';

            $table->bigIncrements('id')->unique()->index();



            $table->string('language');
            $table->string('type');



            $table->string('pre_number');
            $table->integer('number');
            $table->string('pre_year');
            $table->integer('year');



            $table->string('name');



            $table->string('currency');
            $table->decimal('currency_transform', 10, 4);






            $table->string('symbol_constant');
            $table->string('symbol_variable');
            $table->string('symbol_specific');




            $table->date('issued_at');
            $table->date('due_at');
            $table->date('vat_at');










            //company

            $table->string('company_name');
            $table->string('company_street');
            $table->string('company_house_num');
            $table->string('company_zip');
            $table->string('company_city');
            $table->string('company_state');
            $table->string('company_country');
            $table->string('company_idn');
            $table->string('company_vat_idn');

            $table->string('company_isi', 100); //internal source identificator



            $table->string('home_name');
            $table->string('home_street');
            $table->string('home_house_num');
            $table->string('home_zip');
            $table->string('home_city');
            $table->string('home_state');
            $table->string('home_country');
            $table->string('home_idn');
            $table->string('home_vat_idn');

            $table->string('home_isi', 100); //internal source identificator






            $table->string('state');
            $table->date('paid_at');




            $table->text('note');
            $table->string('created_by');




            $table->string('payment_type');




            $table->string('bank_account_isi', 100); //internal source identificator
            $table->string('bank_account_name', 100);
            $table->string('bank_account_number');
            $table->string('bank_account_iban');
            $table->string('bank_account_swift');




            $table->string('bank_isi', 100); //internal source identificator
            $table->string('bank_name');
            $table->string('bank_account');
            $table->string('bank_swift');
            $table->string('bank_iban');
            $table->string('bank_street');
            $table->string('bank_house_number');
            $table->string('bank_zip');
            $table->string('bank_city');
            $table->string('bank_country');








            $table->text('description');










            $table->string('osi', 100); //origin source identificator
            $table->unique( array('account_id','osi') );
            $table->integer('version', 0 );





            $table->bigInteger('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');



            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }

}
