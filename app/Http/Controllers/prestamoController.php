<?php

namespace App\Http\Controllers;

use App\Prestamos;
use Illuminate\Http\Request;
use Illuminate\Broadcasting\PresenceChannel;

class prestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestamo = Prestamos::all()->toArray();//pasa todos los datos de la tabla a la variabele $defs

        return view('prestamo.index', compact('prestamo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestamo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prestamo = new Prestamos([
            'id_libro' => $request->get('id_libro'),
            'id_estudiante' => $request->get('id_estudiante'),
            'id_empleado' => $request->get('id_empleado'),
            'fecha_prestamo' => $request->get('fecha_prestamo'),
            'fecha_entrega' => $request->get('fecha_entrega')
        ]);
        $prestamo->save();
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
        //
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
        //
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
