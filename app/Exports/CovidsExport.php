<?php

namespace App\Exports;

use App\Models\Covid;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CovidsExport implements FromQuery, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
//    public function collection()
//    {
//        return Covid::all();
//    }
    public function query()
    {
        return Covid::where('id','>',1);
    }

    public function map($covid): array
    {
        return [
            $covid->user->name,
            $covid->name,
            $covid->sex,
            $covid->encounter_date,
            $covid->location,
            $covid->contact_of_caller,
            $covid->complaints,
            $covid->vaccine,
            $covid->assistance_offered,
        ];
    }

    public function headings(): array
    {
        return [
            'Tcc Staff',
            'Patient name',
            'Sex',
            'Encounter date',
            'Location',
            'Contact of caller',
            'Complaint',
            'Vaccine',
            'Assistance Offered',
        ];
    }
}
