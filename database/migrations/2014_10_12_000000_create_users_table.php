<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id', true);
            $table->text('nom');
            $table->text('prenom');
            $table->string('pseudo', 32)->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('id_Etat_Inscription')->unsigned();
            $table->integer('id_Rang_Utilisateur')->unsigned();
            $table->foreign('id_Etat_Inscription')->references('id')->on('etat_inscription');
            $table->foreign('id_Rang_Utilisateur')->references('id')->on('rang_utilisateur');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /*   Schema::table('evenement_users', function(Blueprint $table){
                $table->increments('id');
                $table->integer('id_Evenement')->unsigned()->index();
                $table->integer('id_Users')->unsigned()->index();
                $table->foreign('id_Evenement')->references('id')->on('evenement');
                $table->foreign('id_Users')->references('id')->on('users');
        });*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }



}
