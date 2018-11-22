<?php

namespace App\Http\Controllers;

use App\Estudiantes;
use Illuminate\Http\Request;

class estudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiante = Estudiantes::all()->toArray();//pasa todos los datos de la tabla a la variabele $defs

        return view('biblioteca.lista_estudiantes', compact('estudiante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biblioteca.crear_estudiante');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estrudiante = new Estudiantes([
            'nombre' => $request->get('nombre'),
            'numero_de_cedula' => $request->get('numero_de_cedula'),
            'carrera' => $request->get('carrera')
        ]);
        $estudiante->save();
        return redirect('/biblioteca');
    }
    
    /*
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiantes::find($id);
        return view('biblioteca.editar_estudiante',compact('estudiante','id'));
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
        $estudiante = Estudiantes::find($id);
        $estudiante->nombre = $request->get('nombre');
        $estudiante->numero_de_cedula = $request->get('numero_de_cedula');
        $estudiante->carrera = $request->get('carrera');
        $estudiante->save();
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
