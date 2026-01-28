<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    protected $fillable = ['nombre', 'nivel', 'clase','raza', 'aliniamiento', 'historia'];
}
