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
			$table->text('contenu', 65535)->nullable();
			$table->date('dateCommentaire')->nullable();
			$table->integer('id_Utilisateur')->index('FK_Commentaire_id_Utilisateur');
			$table->integer('id_Photo')->index('FK_Commentaire_id_Photo');
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
