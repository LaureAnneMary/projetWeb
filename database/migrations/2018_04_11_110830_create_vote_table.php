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
			$table->foreign('id_Evenement')->references('id')->on('evenement');;
            $table->foreign('id_User')->references('id')->on('user');
            $table->primary(['id_Evenement','id_User']);
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
