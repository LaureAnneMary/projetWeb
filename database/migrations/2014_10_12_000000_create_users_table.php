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
            $table->string('mail')->unique();
            $table->string('password',48);
            $table->foreign('id_Etat_Inscription')->references('id')->on('etat_inscription');
            $table->foreign('id_Rang_Utilisateur')->references('id')->on('rang_utilisateur');
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
