<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('user', function (Blueprint $table) {
      $table->create();
      $table->increments('id');
			$table->string('username')->unique();
			$table->string('password');
			$table->integer('role');
			$table->integer('status');
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
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
