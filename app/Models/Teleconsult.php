<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teleconsult extends Model
{
    use HasFactory;

    protected $fillable = [
         'encounter_date',
            'community',
            'patient_first_name',
            'patient_middle_name',
            'family_name',
            'facility_opd_no',
            'tcc_serial_no',
            'nhis_no',
            'national_id',
            'community',
            'facility',
            'sub_district',
            'region',
            'date_of_birth',
            'age',
            'sex',
            'weight',
            'temperature',
            'blood_pressure',
            'heart_rate',
            'respiratory_rate',
            'complaint',
            'diagnosis',
            'tg_condition',
            'cc_physician',
            'physician_name',
            'prior_referred_to_hospital',
            'ambulance',
            'other',
            'referred_to_hospital',
            'name_of_caller',
            'contact_of_caller'
        ];

}
