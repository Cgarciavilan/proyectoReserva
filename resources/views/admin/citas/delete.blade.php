@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Eliminar Cita</h1>
    </div>


    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Esta seguro de eliminar Registro?</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/admin/citas', $cita->id)}}"method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Nombre de Usuario</label>
                                    <input type="text" value="{{$cita->nombre}}" name="nombre" class="form-control" disabled>
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
                                    <label for="">Identificacion</label>
                                    <input type="number" value="{{$cita->nro_identificacion}}"name="nro_identificacion" class="form-control" disabled>
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
                                    <label for="">Telefono</label>
                                    <input type="number"value="{{$cita->telefono}}" name="telefono" class="form-control"@disabled(true)>
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
                                    <label for="">email</label>
                                    <input type="email" value="{{$cita->email}}" name="email" class="form-control"disabled>
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
                                    <label for="">Fecha_hora</label>
                                    <input type="datetime-local" value="{{$cita->fecha_hora}}" name="fecha_hora" class="form-control"disabled>
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
                                            <label for="">Codigo de Servicio</label>
                                            <input type="number" value="{{$cita->codigo}}" name="codigo" class="form-control"disabled>
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
                                            <label for="">nombre_servicio</label>
                                            <input type="text" value="{{$cita->nombre_servicio}}" name="nombre_servicio" class="form-control"disabled>
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
