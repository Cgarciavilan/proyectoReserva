@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Eliminar Servicio:{{$servicio->codigo}} {{$servicio->nombre_servicio}}</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Esta seguro de eliminar el registro?</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('admin/servicios', $servicio->id)}}"method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-13">
                                    <div class="form group">
                                        <label for="">Codigo de Servicio</label>
                                        <input type="number"value="{{$servicio->codigo}}" name="codigo" class="form-control" disabled>
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
                                    <label for="">Nombre de Servicio</label>
                                    <input type="text" value="{{$servicio->nombre_servicio}}" name="nombre_servicio" class="form-control" disabled>
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
                                        <button type="submit" class="btn btn-danger">Eliminar Registro</button>
                                            
                                        
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
