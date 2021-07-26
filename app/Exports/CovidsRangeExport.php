<?php

namespace App\Exports;

use App\Models\Covid;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CovidsRangeExport implements FromQuery, WithMapping, WithHeadings
{

//    public function collection()
//    {
//        return Covid::all();
//    }

    protected $from_date ;
    protected $to_date;

    public function __construct( $from_date, $to_date )
    {
        $this->from_date = $from_date;
        $this->to_date =  isset($to_date) ? $to_date: Carbon::now();
    }

//    public function collection()
//    {
//        return Teleconsult::all();
//    }
    public function query()
    {
        $result = Covid::whereBetween('encounter_date', [$this->from_date->format('Y-m-d')." 00:00:00", $this->to_date->format('Y-m-d')." 23:59:59"]);
        return $result;
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
            'Assistance Offered',
        ];
    }
}
