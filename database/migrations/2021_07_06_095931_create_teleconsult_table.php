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
            $table->string('facility');
            $table->string('sub_district');
            $table->string('district');
            $table->string('region');
            $table->date('date_of_birth');
            $table->integer('age');
            $table->string('sex');
            $table->float('weight');
            $table->float('temperature');
            $table->string('blood_pressure');
            $table->integer('heart_rate');
            $table->float('respiratory_rate');
            $table->string('complaint');
            $table->string('diagnosis');
            $table->string('tg_condition');
            $table->string('cc_physician');
            $table->string('physician_name');
            $table->boolean('prior_referred_to_hospital');
            $table->boolean('ambulance');
            $table->string('other');
            $table->boolean('referred_to_hospital');
            $table->string('name_of_caller');
            $table->integer('contact_of_caller');
            $table->integer('tcc_staff');
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
