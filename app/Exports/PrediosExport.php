<?php

namespace App\Exports;

use App\Predio;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 
use DB;

class PrediosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $predios = DB::table('predios')->select('id','nombre','ubicacion','tamaño','planta','cantidad','nomina')->get();
        return $predios;
    }

    public function headings():array{
    	return [
    		'Id',
    		'nombre',
    		'ubicacion',
    		'tamaño',
    		'planta',
    		'cantidad',
    		'nomina'
    	];
    }
}
