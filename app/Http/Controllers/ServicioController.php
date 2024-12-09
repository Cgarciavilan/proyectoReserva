<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::all();
        return view('admin.servicios.index',compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()
    {
        return view('admin.servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $datos = request();
       // return response()->json($datos);
       $request->validate([
    
        'codigo'=>'required|unique:servicios',
        'nombre_servicio'=>'required',
        

       

       ]);
      
       $servicio = new Servicio();
       $servicio->codigo=$request->codigo;
       $servicio->nombre_servicio=$request->nombre_servicio;
       $servicio->save();

       

       return redirect()->route('admin.servicios.index')
       ->with('mensaje', 'se registro servicio de la  manera correcta')
       ->with('icono','success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $servicio = Servicio::with('user')->findOrFail($id);
        return view('admin.servicios.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $servicio = Servicio::with('user')->findOrFail($id);
        return view('admin.servicios.edit', compact('servicio'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $servicio = Servicio::find($id);
    $request->validate([
        'codigo'=>'required|unique:servicios,codigo,' .$servicio->id,
        'nombre_servicio'=>'required',
    ]);
   
       $servicio->codigo=$request->codigo;
       $servicio->nombre_servicio=$request->nombre_servicio;
       $servicio->save();

       return redirect()->route('admin.servicios.index')
       ->with('mensaje', 'se actualizo servicio de la  manera correcta')
       ->with('icono','success');
        
    }

    public function confirmDelete($id){
        $servicio = Servicio:: findOrFail($id);
        return view('admin.servicios.delete', compact('servicio'));
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Servicio::destroy($id);
    

        return redirect()->route('admin.servicios.index')
       ->with('mensaje', 'se elimino registro de servicio de la  manera correcta')
       ->with('icono','success');
    }
}
