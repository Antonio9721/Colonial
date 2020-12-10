<?php

namespace App\Http\Controllers;

use App\Cosecha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CosechasExport;

class CosechaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cosechas = DB::table('cosechas')->paginate(3);
        return view('cosechas.index', compact('cosechas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cosechas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Cosecha::create($request->all());
        return redirect()->route('cosechas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cosecha  $cosecha
     * @return \Illuminate\Http\Response
     */
    public function show(Cosecha $cosecha)
    {
        return view('cosechas.show', compact('cosecha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cosecha  $cosecha
     * @return \Illuminate\Http\Response
     */
    public function edit(Cosecha $cosecha)
    {
         return view('cosechas.edit', compact('cosecha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cosecha  $cosecha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cosecha $cosecha)
    {
        $request->validate(
            [
            'predio' => 'required',
            'cultivo' => 'required',
            'cantidad' => 'required',
            'nempleados'=> 'required',
            'pago'=> 'required',
            'fcosecha'=> 'required',
            'tiempo' =>'required'
        ]
    );
        $cosecha->update($request->all());

        return redirect()->route('cosechas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cosecha  $cosecha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cosecha $cosecha)
    {
        $cosecha->delete();
        return redirect()->route('cosechas.index');
    }

    public function exportToPDF(){
           $cosechas = Cosecha::get();
           $pdf = PDF::loadView('cosechas.exportToPDF', compact('cosechas'));
           return $pdf->download('ListadoCosechas.pdf');
       }

       public function exportToXls(){
        return Excel::download(new CosechasExport, 'cosechas.xlsx');
       }

       public function exportToCsv(){
        return Excel::download(new CosechasExport, 'cosechas.csv');
       }
}
