<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = [
        'clave',
        'valor',
        'clase_id',
    ];
}
