@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Registre de Nuevo Servicio</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Ingrese Datos del Servicio</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/admin/servicios/create')}}"method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-13">
                                    <div class="form group">
                                        <label for="">Codigo de Servicio</label><b>*</b>
                                        <input type="number"value="{{old('codigo')}}" name="codigo" class="form-control"required>
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
                                    <input type="text" value="{{old('nombre_servicio')}}" name="nombre_servicio" class="form-control" required>
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
                                        <button type="submit" class="btn btn-primary">Registrar Servicio</button>
                                            
                                        
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
