<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuringTeleconsult extends Model
{
    use HasFactory;

    protected $fillable  = [
        'medication',
        'quantity'
    ];
    public function teleconsult(){
        return $this->belongsTo(Teleconsult::class);
    }
}
