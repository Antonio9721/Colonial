<?php

namespace App\Exports;

use App\Cosecha;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 
use DB;

class CosechasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $cosechas = DB::table('cosechas')->select('id','predio','cultivo','cantidad','nempleados','pago','fcosecha','tiempo')->get();
        return $cosechas;
    }

    public function headings():array{
    	return [
    		'Id',
    		'predio',
    		'cultivo',
    		'cantidad',
    		'nempleados',
    		'pago',
    		'fcosecha',
    		'tiempo'
    	];
    }
}
