<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvenementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evenement', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('libelle', 254);
			$table->text('description', 65535)->nullable();
			$table->date('dateEvenement');
			$table->text('urlPhotoPrincipale', 65535)->nullable();
			$table->decimal('prix', 15, 3);
			$table->integer('vote');
			$table->integer('id_Validation_Evenement')->index('FK_Evenement_id_Validation_Evenement');
			$table->integer('id_Utilisateur')->index('FK_Evenement_id_Utilisateur');
			$table->integer('id_Recurrence')->index('FK_Evenement_id_Recurrence');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evenement');
	}

}
