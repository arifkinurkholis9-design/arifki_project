<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolArchive extends Model
{
    protected $fillable = [
        'archive_number',
        'title',
        'category',
        'school_year',
        'description',
        'file_name',
        'image',
    ];
}
