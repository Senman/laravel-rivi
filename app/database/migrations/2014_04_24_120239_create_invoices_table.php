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

            $table->string('pre_number');
            $table->integer('number');
            $table->string('pre_year');
            $table->integer('year');



            $table->string('name');

            $table->string('currency');
            $table->decimal('currency_transform', 10, 4);

            $table->string('account');


            $table->string('symbol_constant');
            $table->string('symbol_variable');
            $table->string('symbol_specific');

            $table->date('date_issued');
            $table->date('due_date');
            $table->date('date_vat');

            $table->text('note');
            $table->string('role');

            $table->string('created_by');


            //company

            $table->string('company_name');

            $table->string('company_street');
            $table->string('company_zip');
            $table->string('company_city');
            $table->string('company_country');

            $table->string('company_num');
            $table->string('company_vat_num');


            $table->string('home_name');

            $table->string('home_street');
            $table->string('home_zip');
            $table->string('home_city');
            $table->string('home_country');
            $table->string('home_id');
            $table->string('home_vid');


            $table->string('state');
            $table->date('paid_date');
            $table->string('language');
            $table->string('payment_type');
            $table->text('description');
            $table->string('bankAddress', 400);







            $table->string('osi', 100);
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
