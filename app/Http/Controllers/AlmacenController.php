<?php

namespace App\Http\Controllers;

use App\Almacen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AlmacensExport;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $almacens = DB::table('almacens')->paginate(3);
        return view('almacens.index', compact('almacens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('almacens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Almacen::create($request->all());
        return redirect()->route('almacens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function show(Almacen $almacen)
    {
        return view('almacens.show', compact('almacen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function edit(Almacen $almacen)
    {
         return view('almacens.edit', compact('almacen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Almacen $almacen)
    {
         $request->validate(
            [
            'nombre' => 'required',
            'ubicacion' => 'required',
            'producto' => 'required',
            'nencargado'=> 'required',
            'aencargado'=> 'required',
            'habierto'=> 'required',
            'hcerrado' =>'required'
        ]
    );
        $almacen->update($request->all());

        return redirect()->route('almacens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Almacen $almacen)
    {
        $almacen->delete();
        return redirect()->route('almacens.index');
    }
    
     public function exportToPDF(){
           $almacens = Almacen::get();
           $pdf = PDF::loadView('almacens.exportToPDF', compact('almacens'));
           return $pdf->download('ListadoAlmacens.pdf');
       }

       public function exportToXls(){
        return Excel::download(new AlmacensExport, 'almacens.xlsx');
       }

       public function exportToCsv(){
        return Excel::download(new AlmacensExport, 'almacens.csv');
       }
}
