<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRiwayatSekolah extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('riwayat_sekolah', function (Blueprint $table) {
			$table->create();
			$table->increments('id');
			$table->integer('id_siswa')->unsigned();
			$table->integer('id_sekolah')->unsigned();
			/*
			tingkat pendidikan:
				0 = SD
				1 = SMP
				2 = SMA
				3 = Kuliah
			*/
			$table->integer('tingkat_pendidikan');
			$table->string('kelas');
			$table->string('jurusan');
			$table->string('tahun_ajaran');
			/*
				status:
				0 = aktif
				1 = lulus/naik kelas
				2 = tinggal kelas
				3 = keluar
			*/
			$table->string('status');

			$table->boolean('deleted')->default(false);
			$table->integer('created_by')->unsigned();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->integer('deleted_by')->unsigned()->nullable();

			$table->dateTime('created_at');
			$table->dateTime('updated_at')->nullable();
			$table->dateTime('deleted_at')->nullable();


			$table->foreign('id_siswa')->references('id')->on('siswa');
			$table->foreign('id_sekolah')->references('id')->on('sekolah');
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
