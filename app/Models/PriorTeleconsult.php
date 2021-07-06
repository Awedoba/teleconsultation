<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriorTeleconsult extends Model
{
    use HasFactory;

    protected $fillable = [
        'medication',
        'dosages',
        'medication',
        'amount_dispensed'
    ];
}
