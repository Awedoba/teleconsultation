<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeleconsultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teleconsults', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->foreignId('user_id');
            $table->date('encounter_date');
            $table->string('community')->nullable();
            $table->string('patient_first_name');
            $table->string('patient_middle_name')->nullable();
            $table->string('family_name')->nullable();
            $table->integer('facility_opd_no')->nullable();
            $table->string('tcc_serial_no')->nullable();
            $table->string('nhis_no')->nullable();
            $table->string('national_id')->nullable();
            $table->string('facility');
            $table->string('sub_district')->nullable();
            $table->string('district');
            $table->string('region')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('age');
            $table->string('sex');
            $table->float('weight')->nullable();
            $table->float('temperature')->nullable();
            $table->string('blood_pressure')->nullable();
            $table->integer('heart_rate')->nullable();
            $table->float('respiratory_rate')->nullable();
            $table->longText('complaint');
            $table->longText('diagnosis');
            $table->string('tg_condition')->nullable();
            $table->boolean('cc_physician')->default(0);
            $table->string('physician_name')->nullable();
            $table->boolean('prior_referred_to_hospital')->default(0);
            $table->boolean('ambulance')->default(0);
            $table->string('other')->nullable();
            $table->boolean('referred_to_hospital')->default(0);
            $table->boolean('referral_priority')->default(0);
            $table->string('name_of_caller');
            $table->integer('contact_of_caller');
            $table->string('tcc_staff')->nullable();

            $table->string('outcome')->nullable();
            $table->string('purpose')->nullable();
            $table->string('referred_to')->nullable();
            $table->string('referral_status')->nullable();
            $table->string('ambulance_status')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teleconsults');
    }
}
