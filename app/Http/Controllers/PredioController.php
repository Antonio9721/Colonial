<?php

namespace App\Http\Controllers;

use App\Predio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PrediosExport;

class PredioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $predios = DB::table('predios')->paginate(3);
        return view('predios.index', compact('predios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('predios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Predio::create($request->all());
        return redirect()->route('predios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Predio  $predio
     * @return \Illuminate\Http\Response
     */
    public function show(Predio $predio)
    {
        return view('predios.show', compact('predio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Predio  $predio
     * @return \Illuminate\Http\Response
     */
    public function edit(Predio $predio)
    {
        return view('predios.edit', compact('predio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Predio  $predio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Predio $predio)
    {
        $request->validate(
            [
            'nombre' => 'required',
            'ubicacion' => 'required',
            'tamaño' => 'required',
            'planta'=> 'required',
            'cantidad'=> 'required',
            'nomina' =>'required'
        ]
    );
        $predio->update($request->all());

        return redirect()->route('predios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Predio  $predio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Predio $predio)
    {
        $predio->delete();
        return redirect()->route('predios.index');
    }

    public function exportToPDF(){
           $predios = Predio::get();
           $pdf = PDF::loadView('predios.exportToPDF', compact('predios'));
           return $pdf->download('ListadoPredios.pdf');
       }

    public function exportToXls(){
        return Excel::download(new PrediosExport, 'predios.xlsx');
       }

       public function exportToCsv(){
        return Excel::download(new PrediosExport, 'predios.csv');
       }
}
