<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covid extends Model
{
    use HasFactory;

    protected $fillable = [
        'encounter_date',
        'name',
        'user_id',
        'sex',
        'contact_of_caller',
        'location',
        'complaints',
        'assistance_offered'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}