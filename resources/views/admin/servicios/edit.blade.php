@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Modificar Servicio</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Ingrese Datos del Servicio</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('admin/servicios', $servicio->id)}}"method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-13">
                                    <div class="form group">
                                        <label for="">Codigo de Servicio</label><b>*</b>
                                        <input type="number"value="{{$servicio->codigo}}" name="codigo" class="form-control"required>
                                        @error('codigo')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    
                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form group">
                                    <label for="">Nombre de Servicio</label><b>*</b>
                                    <input type="text" value="{{$servicio->nombre_servicio}}" name="nombre_servicio" class="form-control" required>
                                    @error('nombre_servicio')
                                    <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
    
                            </div>
                        </div>
                    </div>
                                       
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/servicios')}}" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-success">Actualizar Registro</button>
                                            
                                        
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </form>
                </div>      
            </div>
        </div>
    </div>

    @endsection
