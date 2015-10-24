<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCampaign extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('campaign', function (Blueprint $table) {
			$table->create();
			$table->increments('id');
			$table->string("no_ktp_penggagas_campaign");
			$table->string("nama_penggagas_campaign");
			$table->string("email_penggagas_campaign");
			$table->string("no_telepon_penggagas_campaign");
			$table->string("nama_campaign");
			$table->text("detail_campaign");
			$table->id("id_anak")->unsigned();
			$table->boolean("approved")->default(false);
			$table->boolean("done")->default(false);

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
