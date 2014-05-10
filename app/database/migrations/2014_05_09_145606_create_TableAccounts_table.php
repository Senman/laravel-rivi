<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('accounts', function ($table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id')->unique()->index();

            $table->string('name', 100);

            $table->string('number');

            $table->string('iban');

            $table->string('swift');

            $table->string('bankName');



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
