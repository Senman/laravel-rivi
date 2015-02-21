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


            $table->bigInteger('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');



            $table->timestamps();

        });


        $account =  Account::where('name', 'admin')->firstOrFail();

        DB::table('users')->insert(
            array(
                'email' => 'david.cerny@senman.cz',
                'account_id' => $account->id,
                'username' => 'admin',
                'firstName' => 'David' ,
                'lastName' => 'Cerny' ,
                'password' => Hash::make('123456')
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
