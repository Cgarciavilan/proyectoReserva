<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios= User::all();
        return view('admin.usuarios.index',compact(var_name:'usuarios'));
    }
    public function create(){
        return view('admin.usuarios.create');
    }
    public function store(Request $request){
        //$datos = request()->all();
       // return response()->json($datos);
       $request->validate([
        'name'=>'required|max:250',
        'email'=>'required|max:250|unique:users',
        'password'=>'required|max:250|confirmed',

       ]);
       $usuario = new User();
       $usuario->name = $request->name;
       $usuario->email = $request->email;
       $usuario->password = Hash::make($request['password']);
       $usuario->save();

       return redirect()->route(route:'admin.usuarios.index')
       ->with('mensaje', 'se registro usuario de la  manera correcta')
       ->with('icono','success');
}
public function show($id){
    $usuario = User:: findOrFail($id);
    return view('admin.usuarios.show' , compact('usuario'));

    
}
public function edit($id){
    $usuario = User:: findOrFail($id);
    return view('admin.usuarios.edit' , compact('usuario'));

}
public function update(Request $request, $id){
    $usuario = User::find($id);
    $request->validate([
        'name'=>'required|max:250',
        'email'=>'required|max:250|unique:users,email,'.$usuario->id,
        'password'=>'nullable|max:250|confirmed',
    ]);
    
    $usuario->name = $request->name;
    $usuario->email = $request->email;
    if($request->filled(key:'password')){
        $usuario->password = Hash::make($request['password']);
    }

    $usuario->save();
    return redirect()->route(route:'admin.usuarios.index')
       ->with('mensaje', 'se actualizo usuario de la  manera correcta')
       ->with('icono','success');

    
}

public function confirmDelete($id){
    $usuario = User:: findOrFail($id);
    return view('admin.usuarios.delete', compact('usuario'));
}

public function DESTROY($id){
    User:: destroy($id);
    return redirect()->route(route:'admin.usuarios.index')
       ->with('mensaje', 'se elimino usuario de la  manera correcta')
       ->with('icono','success');
}
    


}