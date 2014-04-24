<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function ($table) {

            $table->engine = 'InnoDB';

            $table->bigIncrements('id')->unique()->index();
            $table->string('username')->unique();
            $table->string('email');
            $table->string('password', 300);
            $table->string('firstName');
            $table->string('lastName');

            $table->string('role');

            $table->string('remember_token', 100);

            $table->timestamps();

        });


        DB::table('users')->insert(
            array(
                'email' => 'david.cerny@senman.cz',

                'username' => 'admin',
                'firstName' => 'David' ,
                'lastName' => 'Cerny' ,
                'password' => Hash::make('hamachi159')
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
