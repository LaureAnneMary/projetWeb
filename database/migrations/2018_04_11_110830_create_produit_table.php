<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produit', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('libelle', 254);
			$table->text('description', 65535)->nullable();
			$table->decimal('prix', 15, 3);
			$table->string('tva', 10);
            $table->integer('id_Categorie')->unsigned();
			$table->foreign('id_Categorie')->references('id')->on('categorie');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produit');
	}

}
