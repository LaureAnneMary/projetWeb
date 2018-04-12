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
            $table->integer('id_Photo')->unsigned();
			$table->foreign('id_Users')->references('id')->on('users');
			$table->foreign('id_Photo')->references('id')->on('photo');
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
