<?php

namespace App\Http\Controllers;

use App\Libros;
use Illuminate\Http\Request;

class librosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libro = Libros::all()->toArray();//pasa todos los datos de la tabla a la variabele $defs

        return view('libro.index', compact('libro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libro = new Libros([
            'nombre' => $request->get('nombre'),
            'editorial' => $request->get('editorial'),
            'ano' => $request->get('ano'),
            'ubicacion' => $request->get('ubicacion'),
            'autor' => $request->get('autor'),
            'tipo' => $request->get('tipo'),
            'area_de_conocimiento' => $request->get('area_de_conocimiento'),
            'dias_de_prestamo' => $request->get('dias_de_prestamo')
            ]);
            $libro->save();
            return redirect('/biblioteca');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libros::table('libros')->where('nombre',$id)->orWhere('tipo',$id)->orWhere('area_de_conocimiento',$id)->orWhere('autor',$id);
        return view('libro.show',compact('libro','id'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Libros::find($id);
        return view('libro.edit',compact('libro','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $libro = Libros::find($id);
        $libro->nombre = $request->get('nombre');
        $libro->editorial = $request->get('editorial');
        $libro->ano = $request->get('ano');
        $libro->ubicacion = $request->get('ubicacion');
        $libro->autor = $request->get('autor');
        $libro->tipo = $request->get('tipo');
        $libro->area_de_conocimiento = $request->get('area_de_conocimiento');
        $libro->dias_de_prestamo = $request->get('dias_de_prestamo');
        $libro->save();
        return redirect('/biblioteca');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
