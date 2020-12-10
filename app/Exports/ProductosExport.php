<?php

namespace App\Exports;

use App\Producto;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 
use DB;

class ProductoExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $productos = DB::table('productos')->select('id','nombre','tipo','cantidad','precio','inversion','ganancia','descripcion')->get();
        return $productos;
    }

    public function headings():array{
    	return [
    		'Id',
    		'nombre',
    		'tipo',
    		'cantidad',
    		'precio',
    		'inversion',
    		'ganancia',
    		'descripcion'
    	];
    }
}
