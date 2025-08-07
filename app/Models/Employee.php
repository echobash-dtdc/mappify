<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'description', 'image', 'latitude', 'longitude', 'type', 'status'];
    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
    ];
}
