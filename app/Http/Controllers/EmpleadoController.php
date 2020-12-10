<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmpleadosExport;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $empleados = DB::table('empleados')->paginate(3);
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Empleado::create($request->all());
        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
         $request->validate(
            [
            'nombre' => 'required',
            'apellidop' => 'required',
            'apellidom' => 'required',
            'curp' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'cargo' => 'required',
            'registro'=> 'required',
            'ingreso'=> 'required',
            'sueldo' =>'required'
        ]
    );
        $empleado->update($request->all());

        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index');
    }

     public function exportToPDF(){
        $empleados = Empleado::get();
        $pdf = PDF::loadView('empleados.exportToPDF', compact('empleados'));
        return $pdf->download('ListadoEmpleados.pdf');
    }
     public function exportToXls(){
        return Excel::download(new EmpleadosExport, 'empleados.xlsx');
       }

       public function exportToCsv(){
        return Excel::download(new EmpleadosExport, 'empleados.csv');
       }
}
