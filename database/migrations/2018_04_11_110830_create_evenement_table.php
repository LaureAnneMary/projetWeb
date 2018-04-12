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
			$table->foreign('id_Validation_Evenement')->references('id')->on('validation_evenement');
			$table->foreign('id_User')->references('id')->on('user');
			$table->foreign('id_Recurrence')->references('id')->on('recurrence');
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
