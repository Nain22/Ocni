<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $fillable = [
        'nombre', 'created_at', 'updated_at'
    ];
}
