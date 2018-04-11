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
			$table->integer('id_Utilisateur')->index('FK_commande_id_Utilisateur');
			$table->integer('id_Produit')->index('FK_commande_id_Produit');
			$table->integer('id_Etat_Commande')->index('FK_commande_id_Etat_Commande');
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
