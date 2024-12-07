<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\User;
use App\Models\Servicio;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = Cita::all();
        return view ('admin.citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.citas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    
            'nombre'=>'required',
            'nro_identificacion'=>'required:citas',
            'telefono'=>'required',
            'email'=>'required:user',
            'fecha_hora'=>'required',
            'codigo'=>'required:citas',
            'nombre_servicio'=>'required',
        ]);

       $cita = new Cita();
       $cita->nombre=$request->nombre;
       $cita->nro_identificacion=$request->nro_identificacion;
       $cita->telefono=$request->telefono;
       $cita->email=$request->email;
       $cita->fecha_hora=$request->fecha_hora;
       $cita->codigo=$request->codigo;
       $cita->nombre_servicio =$request->nombre_servicio;
       $cita->save();

       return redirect()->route('admin.citas.index')
       ->with('mensaje', 'se registro cita de la  manera correcta');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        //
    }
}
