<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodcuto extends Model
{
     protected $fillable = [
    	'nombre',
    	'tipo',
    	'cantidad',
    	'precio',
    	'inversion',
    	'ganancia',
    	'descripcion'

    ];
}
