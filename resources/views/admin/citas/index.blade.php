@extends('layouts.admin')
@section('content')
<div class="row">
  <h1>Listado de Citas</h1>
</div>
<hr>
<div class="row">
<div class="col-md-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Citas Registradas</h3>

      <div class="card-tools">
        <a href="{{url('admin/citas/create')}}" class="btn btn-primary">
          Crear Usuario
        </a>
      </div>

      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @if ($message = Session::get('mensaje'))
      <script>
        alert('{{$message}}');
      </script>
          
      @endif
      <table id="example1" class="table table-striped table-bordered table-hover table-sm">
        <thead class="table-dark">
          <tr>
            <td style="text-align:center"><b>Nro</b></td>
            <td style="text-align:center"><b>nombre</b></td>
            <td style="text-align:center"><b>nro_identificacion</b></td>
            <td style="text-align:center"><b>telefono</b></td>
            <td style="text-align:center"><b>email</b></td>
            <td style="text-align:center"><b>fecha_hora</b></td>
            <td style="text-align:center"><b>codigo</b></td>
            <td style="text-align:center"><b>nombre_servicio</b></td>
            <td style="text-align:center"><b>Acciones</b></td>
          </tr>
        </thead>
        <tbody>
          <?php $contador = 1; ?>
            @foreach ($citas as $cita)
            <ul>
                <tr>
                    <td style="text-align:center">{{$contador++}}</td>
                    <td>{{$cita->nombre}}</td>
                    <td>{{$cita->nro_identificacion}}</td>
                    <td>{{$cita->telefono}}</td>
                    <td>{{$cita->email}}</td>
                    <td>{{$cita->fecha_hora}}</td>
                    <td>{{$cita->codigo}}</td>
                    <td>{{$cita->nombre_servicio}}</td>
                    


                    


                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{url('admin/citas/'.$cita->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                        <a href="{{url('admin/citas/'.$cita->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                        <a href="{{url('admin/citas/'.$cita->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>  
                      </div>
                    </td>
                </tr>
            </ul>   
            
        @endforeach  
        </tbody>
      </table> 
<script>
                        $(function () {
                            $("#example1").DataTable({
                                "pageLength": 10,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando START a END de TOTAL Citas",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Citas",
                                    "infoFiltered": "(Filtrado de MAX total Citas)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar MENU Citas",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscador:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "responsive": true, "lengthChange": true, "autoWidth": false,
                                buttons: [{
                                    extend: 'collection',
                                    text: 'Reportes',
                                    orientation: 'landscape',
                                    buttons: [{
                                        text: 'Copiar',
                                        extend: 'copy',
                                    }, {
                                        extend: 'pdf'
                                    },{
                                        extend: 'csv'
                                    },{
                                        extend: 'excel'
                                    },{
                                        text: 'Imprimir',
                                        extend: 'print'
                                    }
                                    ]
                                },
                                    {
                                        extend: 'colvis',
                                        text: 'Visor de columnas',
                                        collectionLayout: 'fixed three-column'
                                    }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
{{-- <div class="text-center"> --}}
    
</div>
    
@endsection