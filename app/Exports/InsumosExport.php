<?php

namespace App\Exports;

use App\Insumo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 
use DB;

class InsumosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $insumos = DB::table('insumos')->select('id','nombre','cantidad','precio','tcultivo','descripcion','fecha','temporada')->get();
        return $insumos;
    }

    public function headings():array{
    	return [
    		'Id',
    		'nombre',
    		'cantidad',
    		'precio',
    		'tcultivo',
    		'descripcion',
    		'fecha',
    		'temporada'
    	];
    }
}
