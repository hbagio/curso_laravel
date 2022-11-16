<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    // faz o laravel enteder um campo como sendo array
    protected $casts = [
        'items'=> 'array'
    ];
}
