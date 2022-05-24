<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {

            $table->integer('id_transaction',15)->autoIncrement()->unsigned();
            $table->string('libelle_transaction',150);
            $table->float('montant_transaction',25);
            $table->integer('id_compte');
            $table->Integer('id');

            $table->foreign('id_compte')->references('id_compte')->on('Compte')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id')->references('id')->on('Users')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
