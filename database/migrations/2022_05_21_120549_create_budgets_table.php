<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {

            $table->integer('id_budget',15)->autoIncrement()->unsigned();
            $table->string('nom_budget',45);
            $table->date('periode')->format("d/m/Y");
            $table->float('montant_budget',25);
            $table->string('devise',25);
            $table->integer('id_typebudget');
            $table->Integer('id');

            $table->foreign('id_typebudget')->references('id_typebudget')->on('Typebudget')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('budgets');
    }
}
