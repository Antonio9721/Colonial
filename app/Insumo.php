<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $fillable = [
    	'nombre',
    	'cantidad',
    	'precio',
    	'tcultivo',
    	'descripcion',
    	'fecha',
    	'temporada'
    ];
}
