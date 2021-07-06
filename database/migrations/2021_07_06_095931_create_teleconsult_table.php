<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeleconsultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teleconsult', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('encounter_date');
            $table->string('community');
            $table->string('patient_first_name');
            $table->string('patient_middle_name');
            $table->string('family_name');
            $table->integer('facility_opd_no');
            $table->string('tcc_serial_no');
            $table->string('nhis_no');
            $table->string('national_id');
            $table->string('community');
            $table->string('facility');
            $table->string('sub_district');
            $table->string('region');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teleconsult');
    }
}
