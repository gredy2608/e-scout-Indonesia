<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLaporan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('laporan', function (Blueprint $table) {
			$table->create();
			$table->increments('id');
			$table->integer("tipe");
			$table->string("no_ktp_pelapor");
			$table->string("nama_pelapor");
			$table->string("email_pelapor");
			$table->string("no_telepon_pelapor");
			$table->string("nama_anak");
			$table->string("umur_anak")->nullable();
			$table->string("sekolah_anak")->nullable();
			$table->string("alamat_anak");
			$table->string("kota_anak");
			$table->text("keterangan")->nullable();


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
