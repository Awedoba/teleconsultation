<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuringTeleconsult extends Model
{
    use HasFactory;

    protected $fillables = [
        'medications',
        'quantity'
    ];
}
