<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFunding extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('sumbangan', function (Blueprint $table) {
			$table->create();
			$table->increments('id');
			$table->string("no_ktp_penyumbang");
			$table->string("nama_penyumbang");
			$table->string("email_penyumbang");
			$table->string("no_telepon_penyumbang");
			$table->string("no_rekening_penyumbang");
			$table->string("bank_tujuan");
			$table->string("besar_uang_sumbangan");
			$table->id("id_anak")->nullable()->unsigned();
			$table->boolean("approved")->default(false);

			$table->boolean('deleted')->default(false);
			$table->integer('created_by')->unsigned();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->integer('deleted_by')->unsigned()->nullable();

			$table->dateTime('created_at');
			$table->dateTime('updated_at')->nullable();
			$table->dateTime('deleted_at')->nullable();


			$table->foreign('id_anak')->references('id')->on('akta_lahir');
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
