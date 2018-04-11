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
            $table->integer('id_Etat_Inscription')->index('FK_Utilisateur_id_Etat_Inscription');
            $table->integer('id_Rang_Utilisateur')->index('FK_Utilisateur_id_Rang_Utilisateur');
            $table->rememberToken();
            $table->timestamps();
        });
    }

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
