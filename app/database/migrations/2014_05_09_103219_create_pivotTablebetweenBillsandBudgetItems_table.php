<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotTablebetweenBillsandBudgetItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('bill_budget_item', function($table) {

            $table->engine = 'InnoDB';

            $table->increments('id')->unsigned();
            $table->bigInteger('bill_id')->unsigned();
            $table->bigInteger('budget_item_id')->unsigned();



            $table->foreign('bill_id')->references('id')->on('bills')->onDelete('cascade');
            $table->foreign('budget_item_id')->references('id')->on('budget_items')->onDelete('cascade');


            $table->string('name', 300);
            $table->decimal('income', 10,4);
            $table->decimal('outcome', 10,4);
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
