<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function recaps()
    {
        return $this->hasMany(Recap::class);
    }

    public function inspects()
    {
        return $this->hasMany(Inspect::class);
    }
}
