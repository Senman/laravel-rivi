<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{


        Schema::create('companies', function ($table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id')->unique()->index();

            $table->string('name', 100);
            $table->string('type', 100);

            $table->string('bank_name', 100);
            $table->string('bank_account', 100);

            $table->string('telephone',50);
            $table->string('email',50);

            $table->string('idn', 20);
            $table->string('vat_idn', 20);



            $table->string('street', 100);
            $table->string('house_num', 100);
            $table->string('zip', 10);
            $table->string('city', 50);
            $table->string('country', 300);


            $table->string('rsi', 100);  //remote source identificator

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
        Schema::drop('companies');
	}

}
