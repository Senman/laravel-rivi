<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('banks', function ($table) {

            $table->engine = 'InnoDB';


            $table->bigIncrements('id')->unique()->index();


            $table->string('name');

            $table->string('account');
            $table->string('swift');
            $table->string('iban');


            $table->string('street');
            $table->string('house_number');
            $table->string('zip');
            $table->string('city');
            $table->string('country');

            $table->string('note');


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
