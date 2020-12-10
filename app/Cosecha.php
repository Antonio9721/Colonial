<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cosecha extends Model
{
    protected $fillable = [
    'predio',
    'cultivo',
    'cantidad',
    'nempleados',
    'pago',
    'fcosecha',
    'tiempo'
    ];
}
