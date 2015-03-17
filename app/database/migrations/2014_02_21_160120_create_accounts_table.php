<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration {

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


            $table->string('rsi', 100); //remote source identificator
            $table->integer('version', 0 );



            $table->timestamps();

        });


        DB::table('accounts')->insert(
            array(
                'name' => 'admin',
                'isPublic' => false,
                'rsi' => md5(uniqid(mt_rand(), true))

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
		        Schema::drop('accounts');
	}

}
