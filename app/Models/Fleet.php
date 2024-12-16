<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fleet extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image',
        'gltf',
        'description',
        'status',
        'practice_range',
        'cruise_speed',
        'maximum_speed',
        'normal_takeoff_weight',
        'max_takeoff_weight',
    ];
}
