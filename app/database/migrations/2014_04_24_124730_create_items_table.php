<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

        Schema::create('items', function ($table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id')->unique()->index();

            $table->string('description', 100);
            $table->integer('count');
            $table->decimal('price', 10, 4);
            $table->integer('vat');



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
