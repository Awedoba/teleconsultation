<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covids', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user_id');
            $table->date('encounter_date');
            $table->string('name');
            $table->integer('age');
            $table->string('unit');
            $table->string('sex');
            $table->integer('contact_of_caller');
            $table->string('location');
            $table->string('complaints');
            $table->string('vaccine');
            $table->string('assistance_offered');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covids');
    }
}
