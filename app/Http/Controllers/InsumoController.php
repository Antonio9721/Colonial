<?php

namespace App\Http\Controllers;

use App\Insumo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\InsumosExport;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insumos = DB::table('insumos')->paginate(3);
        return view('insumos.index', compact('insumos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insumos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Insumo::create($request->all());
        return redirect()->route('insumos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function show(Insumo $insumo)
    {
       return view('insumos.show', compact('insumo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function edit(Insumo $insumo)
    {
        return view('insumos.edit', compact('insumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insumo $insumo)
    {
        $request->validate(
            [
            'nombre' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'tcultivo'=> 'required',
            'descripcion'=> 'required',
            'fecha'=> 'required',
            'temporada' =>'required'
        ]
    );
        $insumo->update($request->all());

        return redirect()->route('insumos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insumo $insumo)
    {
        $insumo->delete();
        return redirect()->route('insumos.index');
    }

    public function exportToPDF(){
           $insumos = Insumo::get();
           $pdf = PDF::loadView('insumos.exportToPDF', compact('insumos'));
           return $pdf->download('ListadoInsumos.pdf');
       }

       public function exportToXls(){
        return Excel::download(new InsumosExport, 'insumos.xlsx');
       }

       public function exportToCsv(){
        return Excel::download(new InsumosExport, 'insumos.csv');
       }
}
