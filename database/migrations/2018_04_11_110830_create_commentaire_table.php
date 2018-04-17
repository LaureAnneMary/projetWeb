<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentaireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commentaire', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('contenu')->nullable();
			$table->date('dateCommentaire')->nullable();
            $table->integer('id_Users')->unsigned();
            $table->integer('photo_id')->unsigned();
			$table->foreign('id_Users')->references('id')->on('users');
			$table->foreign('photo_id')->references('id')->on('photo');
			//$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('commentaire');
	}
}
