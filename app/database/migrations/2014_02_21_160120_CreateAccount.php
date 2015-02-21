<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccount extends Migration {

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

            $table->string('name');
            $table->boolean('isPublic',true);


            $table->timestamps();

        });


        DB::table('accounts')->insert(
            array(
                'name' => 'admin',
                'isPublic' => false

            )
        );


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
