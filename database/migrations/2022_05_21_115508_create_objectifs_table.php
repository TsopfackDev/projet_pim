<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectifs', function (Blueprint $table) {

            $table->integer('id_objectif',15)->autoIncrement()->unsigned();
            $table->string('nom_objectif',35);
            $table->float('montant_cible',20);
            $table->float('montant_enregistré',20);
            $table->date('date')->format("d/m/Y");
            $table->string('description_objectif',110);
            $table->integer('id_typeobjectif');
            $table->Integer('id'); 

            $table->foreign('id')->references('id')->on('Users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_typeobjectif')->references('id_objectif')->on('Typeobjectif')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objectifs');
    }
}
