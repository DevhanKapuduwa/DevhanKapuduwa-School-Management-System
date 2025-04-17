<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassroomSubject extends Model
{
    use HasFactory;
    protected $fillable = ['classroom_id','subject_id'];
}