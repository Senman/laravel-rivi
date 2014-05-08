<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetitemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('budget_items', function ($table) {


            $table->engine = 'InnoDB';

            $table->bigIncrements('id')->unique()->index();

            $table->string('name');

            $table->decimal('income', 10,4);
            $table->decimal('outcome', 10,4);

            $table->timestamps();

            $table->bigInteger('budget_id')->unsigned();
            $table->foreign('budget_id')->references('id')->on('budgets')->onDelete('cascade');

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
