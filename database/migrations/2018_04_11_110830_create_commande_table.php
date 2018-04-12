<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commande', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('numeroCommande');
			$table->date('dateCommande');
			$table->decimal('prix', 15, 3);
			$table->integer('quantite');
            $table->foreign('id_User')->references('id')->on('user');
            $table->foreign('id_Produit')->references('id')->on('produit');
            $table->foreign('id_Etat_Commande')->references('id')->on('etat_commande');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('commande');
	}

}
