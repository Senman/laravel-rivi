<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('bills', function ($table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id')->unique()->index();

            $table->date('date_issued');
            $table->date('due_date');
            $table->date('date_vat');

            $table->string('name', 300);
            $table->decimal('income', 10,4);
            $table->decimal('outcome', 10,4);
            $table->integer('vat');
            $table->string('payment_type', 100);
            $table->string('created_by', 100);


            $table->string('bill_type', 100);

            $table->text('note');

            $table->date('date_paid');

            $table->string('paid_by');


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
