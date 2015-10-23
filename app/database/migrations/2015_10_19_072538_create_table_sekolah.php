<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSekolah extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
			Schema::table('sekolah', function (Blueprint $table) {
				$table->create();
				$table->increments('id');
				$table->string('nama_sekolah');
				/*
					0=SD
					1=SMP
					2=SMA
					...
				*/
				$table->integer('tingkat_pendidikan');
				$table->string('alamat');
				$table->string('kota');
				$table->integer('kode_pos');
				$table->string('telepon');
				$table->string('username');
				$table->string('password');
				$table->boolean('deleted')->default(false);
				$table->integer('created_by')->unsigned();
				$table->integer('updated_by')->unsigned()->nullable();
				$table->integer('deleted_by')->unsigned()->nullable();
				$table->dateTime('created_at');
				$table->dateTime('updated_at')->nullable();
				$table->dateTime('deleted_at')->nullable();



				$table->foreign('created_by')->references('id')->on('user');
				$table->foreign('updated_by')->references('id')->on('user');
				$table->foreign('deleted_by')->references('id')->on('user');
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
