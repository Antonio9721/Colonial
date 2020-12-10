<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $fillable = [
    	'nombre',
    	'ubicacion',
    	'producto',
    	'nencargado',
    	'aencargado',
    	'habierto',
    	'hcerrado'
    ];
}
