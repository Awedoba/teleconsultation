<?php

namespace App\Exports;

use App\Models\Teleconsult;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TeleconsultsRangeExport implements FromQuery, WithMapping, WithHeadings
{
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

//        dd(["from"=>$this->from_date,
//            "to"=>$this->to_date]);
        $result = Teleconsult::whereBetween('encounter_date', [$this->from_date->format('Y-m-d')." 00:00:00", $this->to_date->format('Y-m-d')." 23:59:59"]);
        return $result;
//        return Teleconsult::where('id','>',1);
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
            $teleconsult->sex,
            $teleconsult->complaint,
            $teleconsult->name_of_caller,
            $teleconsult->contact_of_caller,
            $teleconsult->diagnosis,
            $teleconsult->purpose,
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
            'Complaint',
            'Name of caller',
            'Contact of caller',
            'Diagnosis',
            'Purpose',
        ];
    }
}
