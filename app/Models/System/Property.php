<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';

    protected $fillable = [
        'location',
        'size',
        'status',
        'price'
    ];
}
