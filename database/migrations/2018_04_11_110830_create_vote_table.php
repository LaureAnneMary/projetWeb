<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vote', function(Blueprint $table)
		{
			$table->integer('id');
			$table->integer('id_Evenement')->index('FK_vote_id_Evenement');
			$table->primary(['id','id_Evenement']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vote');
	}

}
