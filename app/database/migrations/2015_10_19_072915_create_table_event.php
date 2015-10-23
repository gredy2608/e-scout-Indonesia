<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEvent extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('event', function (Blueprint $table) {
			$table->create();
			$table->increments('id');
			$table->string('nama_event');
			$table->string('tingkat_perlombaan');
			$table->string('alamat_lokasi');
			$table->string('kota');
			$table->date('tanggal_pelaksanaan');
			$table->text('deskripsi');

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
