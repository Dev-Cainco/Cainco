@extends('panel.template')
@section('contenido')           
@if(\Session::has('message'))
    @include('alerts.message')
@endif  
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Usuarios</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-6" style="padding-left: 920px;">
                    <a href="{{route('usuarios.create')}}">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>  &nbsp;&nbsp;&nbsp;&nbsp; Agregar</button>
                    </a>
                </div>
                <div class="box-body table-responsive">
                    <table id="users-table" class="table table-bordered table-striped">
                        <thead>

                               <tr>
                                  <th>Imagen</th>
                                  <th>Nombre</th>
                                  <th>Apellidos</th>
                                  <th>Carnet de Identidad</th>
                                  <th>Turno</th>
                                  <th>Carrera</th>
                                  <th>Fecha Registro</th>
                                  <th>Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($usuarios as $usuario)
                              <tr> 
                                  <td width="50px"><img src="{{public_path('local')}}/{{$usuario->imagen}}" alt="" width="50px"></td> 
                                  <td>{{$usuario->nombre}}</td>
                                  <td>{{$usuario->apellidoP .' '. $usuario->apellidoM}}</td>
                                  <td>{{$usuario->ci}}</td>
                                  <td>{{$usuario->turno}}</td>
                                  <td>{{$usuario->carrera_id}}</td>
                                  <td>{{$usuario->created_at}}</td>
                                  <td>
                                    <a href="#" data-target="#modal-detalle-{{$usuario->id}}" data-toggle="modal" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('usuarios.edit',$usuario->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i>
                                    </a>
                                    @if(($usuario->estado) == '1') 
                                    <a href="{{route('usuarios.show',$usuario->id)}}">   
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>
                                    </a>
                                    @else
                                    <a href="{{route('usuarios.show',$usuario->id)}}">   
                                    <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                                    </a>
                                    @endif
                                  </td>       
                              </tr>
                              @include('panel.usuario.show')
                              @endforeach
                                  <th>Nombre</th>
                                  <th>Apellido Paterno</th>
                                  <th>Apellido Materno</th> 
                                  <th>Editar</th>    
                              </tr>
                              </thead>
                              <tbody>
                              </tbody>
                        <tfoot>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Carnet de Identidad</th>
                                <th>Turno</th>
                                <th>Carrera</th>
                                <th>Fecha Registro</th>
                                <th>Acciones</th>
                                  <th>Apellido Paterno</th>
                                  <th>Editar</th>
                            </tr>
                        </tfoot>
                    </table>
                    {!! $dataTable->table() !!}
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop
@section('script')
<script>
/*$(function() {
    $('#users-table').DataTable({
       
        buttons: [
            'copy'
        ],
        ajax: '{{route('getUser')}}',
        columns: [
            { data: 'nombre', name: 'nombre' },
            { data: 'apellidoP', name: 'apellidoP' },
            { data: 'apellidoM', name: 'apellidoM' },
            { data: 'action', name: 'action', orderable: false, searchable: false}
        ],
        language: {
             "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json",
        },   
      
        });
    });*/
</script>
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!! $dataTable->scripts() !!}
@stop