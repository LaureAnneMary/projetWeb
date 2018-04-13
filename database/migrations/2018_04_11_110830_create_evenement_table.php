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
            $table->integer('id_Validation_Evenement')->unsigned();
            $table->integer('id_Users')->unsigned();
            $table->integer('id_Recurrence')->unsigned();
			$table->foreign('id_Validation_Evenement')->default('2')->references('id')->on('validation_evenement');
			$table->foreign('id_Users')->references('id')->on('users');
			$table->foreign('id_Recurrence')->references('id')->on('recurrence');
			$table->timestamps();
			});

        Schema::create('evenement_user', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_Evenement')->unsigned()->index();
            $table->integer('id_Users')->unsigned()->index();
            $table->foreign('id_Evenement')->references('id')->on('evenement')->onDelete('cascade');
            $table->foreign('id_Users')->references('id')->on('users')->onDelete('cascade');
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
