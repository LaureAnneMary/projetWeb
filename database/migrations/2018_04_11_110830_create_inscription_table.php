<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInscriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inscription', function(Blueprint $table)
		{
			$table->integer('id');
			$table->integer('id_Utilisateur')->index('FK_inscription_id_Utilisateur');
			$table->primary(['id','id_Utilisateur']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inscription');
	}

}
