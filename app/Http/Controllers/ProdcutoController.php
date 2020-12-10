<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductosExport;

class ProdcutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = DB::table('productos')->paginate(2);
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Producto::create($request->all());
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prodcuto  $prodcuto
     * @return \Illuminate\Http\Response
     */
    public function show(Prodcuto $prodcuto)
    {
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prodcuto  $prodcuto
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodcuto $prodcuto)
    {
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prodcuto  $prodcuto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodcuto $prodcuto)
    {
       $request->validate(
            [
            'nombre' => 'required',
            'tipo' => 'required',
            'cantidad' => 'required',
            'precio'=> 'required',
            'inversion'=> 'required',
            'ganancia'=> 'required',
            'descripcion' =>'required'
        ]
    );
        $producto->update($request->all());

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prodcuto  $prodcuto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodcuto $prodcuto)
    {
                $producto->delete();
        return redirect()->route('productos.index');
    }

    public function exportToPDF(){
           $productos = Producto::get();
           $pdf = PDF::loadView('productos.exportToPDF', compact('productos'));
           return $pdf->download('ListadoProductos.pdf');
       }

    public function exportToXls(){
        return Excel::download(new ProductosExport, 'productos.xlsx');
       }

       public function exportToCsv(){
        return Excel::download(new ProductosExport, 'productos.csv');
       }
}
