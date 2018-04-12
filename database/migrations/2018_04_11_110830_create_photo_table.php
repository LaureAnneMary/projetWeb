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
            $table->foreign('id_User')->references('id')->on('user');
            $table->foreign('id_Evenement')->references('id')->on('evenement');
            $table->foreign('id_Produit')->references('id')->on('produit');
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
