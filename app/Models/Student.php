<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'student_code',
        'display_name',
        'class_name',
        'program',
        'enrollment_year',
        'status',
        'image',
    ];
}
