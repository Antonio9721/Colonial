<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
    'nombre',
    'apellidop',
    'apellidom',
    'curp',
    'correo',
    'telefono',
    'cargo',
    'registro',
    'ingreso',
    'sueldo'];
}
