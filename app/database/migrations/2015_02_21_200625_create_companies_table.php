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
            $table->string('street', 100);
            $table->string('zip', 10);
            $table->string('city', 50);
            $table->string('bankName', 100);
            $table->string('bankAccount', 100);
            $table->string('telephone',50);
            $table->string('email',50);
            $table->string('cid', 20);
            $table->string('vatid', 20);
            $table->string('country', 300);


            $table->string('rsi', 100);  //remote source identificator
            $table->string('rsa');       // remote source address
            $table->string('rsp', 20);   // remote source protocol
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
