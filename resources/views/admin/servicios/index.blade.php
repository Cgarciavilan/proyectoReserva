@extends('layouts.admin')
@section('content')
<div class="row">
  <h1>Listado de Servicios</h1>
</div>
<hr>
<div class="row">
<div class="col-md-10">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Servicios Registrados</h3>

      <div class="card-tools">
        <a href="{{url('admin/servicios/create')}}" class="btn btn-primary">
          Crear Servicio
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
            <td style="text-align:center"><b>Codigo</b></td>
            <td style="text-align:center"><b>Nombre_servicio</b></td>
            <td style="text-align:center"><b>Acciones</b></td>
          </tr>
        </thead>
        <tbody>
          <?php $contador = 1; ?>
            @foreach ($servicios as $servicio)
            <ul>
                <tr>
                    <td style="text-align:center">{{$contador++}}</td>
                    <td>{{$servicio->codigo}}</td>
                    <td>{{$servicio->nombre_servicio}}</td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{url('admin/servicios/'.$servicio->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                        <a href="{{url('admin/servicios/'.$servicio->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                        <a href="{{url('admin/servicios/'.$servicio->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>  
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
                                    "info": "Mostrando START a END de TOTAL Servicios",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                                    "infoFiltered": "(Filtrado de MAX total Servicios)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar MENU Servicios",
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