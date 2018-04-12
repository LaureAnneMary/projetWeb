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
            $table->integer('id_Users')->unsigned();
            $table->integer('id_Evenement')->unsigned();
            $table->integer('id_Produit')->unsigned();
			$table->foreign('id_Users')->references('id')->on('users');
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
