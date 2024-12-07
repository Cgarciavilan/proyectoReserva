@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Registro de Nueva Cita</h1>
    </div>


    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Ingrese Datos de Nueva Cita</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/admin/citas/create')}}"method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Nombre de Usuario</label><b>*</b>
                                    <input type="text" value="{{old('nombre')}}" name="nombre" class="form-control" required>
                                    @error('nombre')
                                    <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
    
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Identificacion</label><b>*</b>
                                    <input type="number" value="{{old('nro_identificacion')}}"name="nro_identificacion" class="form-control" required>
                                    @error('nro_identificacion')
                                    <small style="color:red">{{$message}}</small>
                                    @enderror
                                    
                                </div>
    
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Telefono</label><b>*</b>
                                    <input type="number"value="{{old('telefono')}}" name="telefono" class="form-control"required>
                                    @error('telefono')
                                    <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">email</label><b>*</b>
                                    <input type="email" value="{{old('email')}}" name="email" class="form-control"required>
                                    @error('email')
                                    <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Fecha_hora</label><b>*</b>
                                    <input type="datetime-local" value="{{old('fecha_hora')}}" name="fecha_hora" class="form-control"required>
                                    @error('fecha_hora')
                                    <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
    
                            </div>
                        </div>
                    </div>
                        
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form group">
                                            <label for="">Codigo de Servicio</label><b>*</b>
                                            <input type="number" value="{{old('codigo')}}" name="codigo" class="form-control"required>
                                            @error('codigo')
                                            <small style="color:red">{{$message}}</small>
                                            @enderror
                                        </div>
            
                                    </div>
                            </div>
                        </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form group">
                                            <label for="">nombre_servicio</label><b>*</b>
                                            <input type="text" value="{{old('nombre_servicio')}}" name="nombre_servicio" class="form-control"required>
                                            @error('nombre_servicio')
                                            <small style="color:red">{{$message}}</small>
                                            @enderror
                                        </div>
            
                                    </div>
                            </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/citas')}}" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-primary">Registrar Cita</button>
                                            
                                        
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
