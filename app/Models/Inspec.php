<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspec extends Model
{
    use HasFactory;

    protected $fillable = [
        'string_id',
        'ppe_name',
        'inspector_name',
        'inspection_date',
        'area_id',
        'borrower_name',
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'image',
        'notes',
        'recommendation',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
