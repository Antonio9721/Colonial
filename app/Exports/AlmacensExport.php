<?php

namespace App\Exports;

use App\Almacen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 
use DB;

class AlmacensExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $almacens = DB::table('almacens')->select('id','nombre','ubicacion','producto','nencargado','aencargado','habierto','hcerrado')->get();
        return $almacens;
    }

    public function headings():array{
    	return [
    		'Id',
    		'nombre',
    		'ubicacion',
    		'producto',
    		'nencargado',
    		'aencargado',
    		'habierto',
    		'hcerrado'
    	];
    }
}
