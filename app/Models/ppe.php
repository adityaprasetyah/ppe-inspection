<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppe extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'total_warehouse',
        'total_onsite',
        'body_harness',
        'safety_helmet',
        'kap_las',
        'face_shield',
        'sarung_tangan_las',
        'earplug',
        'safety_shoes',
        'vest',
    ];
}
