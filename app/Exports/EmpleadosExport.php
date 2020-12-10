<?php

namespace App\Exports;

use App\Empleado;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 
use DB;

class EmpleadosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $empleados = DB::table('empleados')->select('id','nombre','apellidop','apellidom','curp','correo','telefono','cargo','registro','ingreso','sueldo')->get();
        return $empleados;
    }

    public function headings():array{
    	return [
    		'Id',
    		'nombre',
    		'apellidop',
    		'apellidom',
    		'curp',
    		'correo',
    		'telefono',
    		'cargo',
            'registro',
            'ingreso',
            'sueldo'
    	];
    }
}
