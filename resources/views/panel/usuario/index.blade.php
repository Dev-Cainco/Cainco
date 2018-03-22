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
                                  <th>Nombre</th>
                                  <th>Apellido Paterno</th>
                                  <th>Carnet de Identidad</th>
                                  <th>Carrera</th>
                                  <th>Turno</th>
                                  <th>Telefono</th>
                                  <th>Imagen</th>
                                  <th>Fecha Registro</th>
                                  <th>Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($usuarios as $usuario)
                              <tr> 
                                  <td>{{$usuario->nombre}}</td>
                                  <td>{{$usuario->apellidoP}}</td>
                                  <td>{{$usuario->ci}}</td>
                                  <td>{{$usuario->carrera_id}}</td>
                                  <td>{{$usuario->turno}}</td>
                                  <td>{{$usuario->telefono}}</td>
                                  <td width="50px"><img src="{{public_path('local')}}/{{$usuario->imagen}}" alt="" width="50px"></td> 
                                  <td>{{$usuario->created_at}}</td>
                                  <td>
                                    {!!Form::open(['route'=>['usuarios.destroy', $usuario->id], 'method' => 'DELETE'])!!}
                                    <a href="{{route('usuarios.edit',$usuario->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>    
                                    <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                                    {!!Form::close()!!}
                                  </td>       
                              </tr>
                              @endforeach
                              </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Carnet de Identidad</th>
                                <th>Carrera</th>
                                <th>Turno</th>
                                <th>Telefono</th>
                                <th>Imagen</th>
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