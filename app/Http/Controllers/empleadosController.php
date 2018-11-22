<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;

class empleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado = Empleados::all()->toArray();//pasa todos los datos de la tabla a la variabele $defs

        return view('biblioteca.lista_empleados', compact('empleado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biblioteca.crear_empleado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado([
            'nombre' => $request->get('nombre'),
            'numero_de_cedula' => $request->get('numero_de_cedula'),
            'ocupacion' => $request->get('ocupacion')
        ]);
        $empleado->save();
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
        $empleado = Empleados::find($id);
        return view('biblioteca.editar_empleado',compact('empleado','id'));
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
        $empleados = Empleados::find($id);
        $empleados->nombre = $request->get('nombre');
        $empleados->numero_de_cedula = $request->get('numero_de_cedula');
        $empleados->ocupacion = $request->get('ocupacion');
        $empleados->save();
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
