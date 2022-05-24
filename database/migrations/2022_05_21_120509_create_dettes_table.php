<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dettes', function (Blueprint $table) {

            $table->integer('id_dette',15)->autoIncrement()->unsigned();
            $table->string('montant_dette',35);
            $table->string('type_dette',35);
            $table->integer('id');

            $table->foreign('id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dettes');
    }
}
