<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspec extends Model
{
    use HasFactory;

    protected $fillable = [
        'string_id',
        'borrower_name',
        'ppe_name',
        'area_id',
        'loan_date',
        'submission_date',
        'image',
        'notes',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
