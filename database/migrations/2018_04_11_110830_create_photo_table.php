<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('url', 65535);
			$table->integer('nombreLike');
			$table->integer('id_Utilisateur')->index('FK_Photo_id_Utilisateur');
			$table->integer('id_Evenement')->index('FK_Photo_id_Evenement');
			$table->integer('id_Produit')->index('FK_Photo_id_Produit');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photo');
	}

}
