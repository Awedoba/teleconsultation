<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriorTeleconsultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prior_teleconsults', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('teleconsult_id');
            $table->string('medication');
            $table->string('dosages');
            $table->string('medication_form');
            $table->string('amount_dispensed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prior_teleconsults');
    }
}
