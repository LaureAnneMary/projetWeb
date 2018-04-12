<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInscriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*Schema::create('inscription', function(Blueprint $table)
		{
			$table->foreign('id_Evenement')->references('id')->on('evenement');
			$table->foreign('id_User')->references('id')->on('user');
			$table->primary(['id_Evenement','id_User']);
		});*/

        Schema::create('inscription', function($table){
            $table->unsignedInteger('id_Evenement');
            $table->unsignedInteger('id_Users');
            $table->primary(['id_Evenement','id_Users']);
        });

        Schema::table('inscription', function($table){
            $table->foreign('id_Evenement')->references('id_Evenement')->on('evenement');
            $table->foreign('id_Users')->references('id_Users')->on('users');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inscription');
	}

}
