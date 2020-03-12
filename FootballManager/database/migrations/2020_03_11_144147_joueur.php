<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Joueur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Joueurs', function (Blueprint $table) {
		 $table->bigIncrements('id');
		 $table->string('nom');
		 $table->string('prenom');
		 $table->integer('age');
		 $table->integer('tir');
		 $table->integer('passe');
		 $table->integer('technique');
		 $table->integer('placement');
		 $table->integer('vitesse');
		 $table->integer('tacle');
		 $table->integer('arret');
		 $table->integer('forme');
		 $table->integer('endurance');
		 $table->integer('noteGlobale');
		 $table->integer('noteInstantanee');
		 //$table->foreign('eleve')->references('login')->on('eleve');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Joueur');
    }
}
