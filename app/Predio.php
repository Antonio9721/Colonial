<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
   protected $fillable = [
      'nombre',
      'ubicacion',
      'tamaño',
      'planta',
      'cantidad',
      'nomina'
    ];
}
