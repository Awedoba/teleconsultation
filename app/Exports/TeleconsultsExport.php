<?php

namespace App\Exports;

use App\Models\Teleconsult;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;


//class TeleconsultsExport implements FromCollection
class TeleconsultsExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
//    public function collection()
//    {
//        return Teleconsult::all();
//    }
    public function query()
    {
        return Teleconsult::where('id','>',1);
    }

    public function map($teleconsult): array
    {
        return [
            $teleconsult->user->name,
            $teleconsult->encounter_date,
            $teleconsult->district,
            $teleconsult->facility,
            $teleconsult->patient_first_name,
            $teleconsult->age,
            $teleconsult->unit,
            $teleconsult->sex,
            $teleconsult->complaint,
            $teleconsult->name_of_caller,
            $teleconsult->contact_of_caller,
            $teleconsult->diagnosis,
            $teleconsult->purpose,
            $teleconsult->apgar,
            $teleconsult->gcs,
            $teleconsult->fhr
        ];
    }

    public function headings(): array
    {
        return [
            'Tcc Staff',
            'encounter_date',
            'District',
            'Facility',
            'Patient name',
            'Age',
            'Sex',
            'Unit',
            'Complaint',
            'Name of caller',
            'Contact of caller',
            'Diagnosis',
            'Purpose',
            'APGAR',
            'GCS',
            'FHR',
            'case'
        ];
    }
}
