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
