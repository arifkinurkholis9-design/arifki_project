<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfficeLetter extends Model
{
    protected $fillable = [
        'reference_number',
        'letter_type',
        'subject',
        'sender',
        'recipient',
        'letter_date',
        'status',
        'image',
    ];

    protected function casts(): array
    {
        return [
            'letter_date' => 'date',
        ];
    }
}
