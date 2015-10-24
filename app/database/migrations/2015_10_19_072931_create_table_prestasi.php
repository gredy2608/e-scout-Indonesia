<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePrestasi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('prestasi', function (Blueprint $table) {
			$table->create();
			$table->increments('id');
			$table->integer('id_event')->unsigned()->nullable();
			$table->string('nama_event')->nullable();
			$table->integer('juara')->nullable();
			$table->string('kategori');
			$table->text('keterangan');
			$table->date('tanggal');
			$table->integer('id_siswa')->unsigned();
			$table->integer('tipe');

			$table->boolean('deleted')->default(false);
			$table->integer('created_by')->unsigned();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->integer('deleted_by')->unsigned()->nullable();
			$table->dateTime('created_at');
			$table->dateTime('updated_at')->nullable();
			$table->dateTime('deleted_at')->nullable();

			$table->foreign('id_event')->references('id')->on('event');
			$table->foreign('id_siswa')->references('id')->on('siswa');
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
