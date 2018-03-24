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
                </div><br><br><br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
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
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop