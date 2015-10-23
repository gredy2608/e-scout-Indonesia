<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNilai extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('nilai', function (Blueprint $table) {
			$table->create();
			$table->increments('id');
			$table->integer('id_siswa')->unsigned();
			$table->integer('id_sekolah')->unsigned();
			$table->integer('id_pelajaran')->unsigned();
			$table->float('nilai');
			$table->string('tahun_ajaran');
			$table->integer('kelas');

			$table->boolean('deleted')->default(false);
			$table->integer('created_by')->unsigned();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->integer('deleted_by')->unsigned()->nullable();

			$table->dateTime('created_at');
			$table->dateTime('updated_at')->nullable();
			$table->dateTime('deleted_at')->nullable();


			$table->foreign('id_siswa')->references('id')->on('siswa');
			$table->foreign('id_sekolah')->references('id')->on('sekolah');
			$table->foreign('id_pelajaran')->references('id')->on('pelajaran');
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
