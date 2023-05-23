<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppe extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'warehouse_total',
        'warehouse_body_harness',
        'warehouse_safety_helmet',
        'warehouse_kap_las',
        'warehouse_face_shield',
        'warehouse_sarung_tangan_las',
        'warehouse_earplug',
        'warehouse_safety_shoes',
        'warehouse_vest',
        'onsite_total',
        'onsite_body_harness',
        'onsite_safety_helmet',
        'onsite_kap_las',
        'onsite_face_shield',
        'onsite_sarung_tangan_las',
        'onsite_earplug',
        'onsite_safety_shoes',
        'onsite_vest',
    ];
}
