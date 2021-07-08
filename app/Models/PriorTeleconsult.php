<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriorTeleconsult extends Model
{
    use HasFactory;
    protected $fillable = [
        'medication',
        'dosage',
        'medication',
        'amount_dispensed'
    ];
    public function teleconsult(){
        return $this->belongsTo(Teleconsult::class);
    }
}
