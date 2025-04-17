<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'classroom_id',
        'gender',
        'personal_phone',
        'address',
        'mother_name',
        'mother_phone',
        'father_name',
        'father_phone',
        'land_phone',
        'subjects'
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }   

    protected $casts = [
        'subjects' => 'array',
    ];
    
}