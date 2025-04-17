<?php

namespace App\Models;

use App\ClassRoomStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        "teacherName",
        'status'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    protected $casts = [
        'status' => ClassRoomStatus::class,
    ];
}
