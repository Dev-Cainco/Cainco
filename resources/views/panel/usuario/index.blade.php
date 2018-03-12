@extends('panel.template')

@section('contenido')           
                  @if(\Session::has('message'))
                      @include('alerts.message')
                  @endif  
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4 class="text-center"><i class="fa fa-user"></i>Usuarios Registrados</h4>
                            <hr>
                              <thead>

                               <tr>
                                  <th><i class="fa fa-edit"></i> Nombre</th>
                                  <th><i class="fa fa-edit"></i> Apellido Paterno</th>
                                  <th><i class="fa fa-edit"></i> Apellido Materno</th>
                                  <th><i class="fa fa-edit"></i> Carnet de Identidad</th>
                                  <th><i class="fa fa-edit"></i> Email</th>
                                  <th><i class="fa fa-edit"></i> Carrera</th>
                                  <th><i class="fa fa-edit"></i> Turno</th>
                                  <th><i class="fa fa-edit"></i> Telefono</th>
                                  <th><i class="fa fa-edit"></i> Imagen</th>
                                  <th><i class="fa fa-edit"></i> Fecha Registro</th>
                                  <th><i class="fa fa-edit"></i> Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($usuarios as $usuario)
                              <tr> 
                                  <td>{{$usuario->nombre}}</td>
                                  <td>{{$usuario->apellidoP}}</td>
                                  <td>{{$usuario->apellidoM}}</td>
                                  <td>{{$usuario->ci}}</td>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->carrera_id}}</td>
                                  <td>{{$usuario->turno}}</td>
                                  <td>{{$usuario->telefono}}</td>
                                  <td width="50px"><img src="{{storage_path('public').'/'.$usuario->imagen}}" alt="" width="50px"></td> 
                                  <td>{{$usuario->created_at}}</td>
                                  <td>
                                    {!!Form::open(['route'=>['usuarios.destroy', $usuario->id], 'method' => 'DELETE'])!!}
                                    <a href="{{route('usuarios.edit',$usuario->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <button href="" onclick="return confirm('Eliminar Registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    {!!Form::close()!!}
                                  </td>       
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                      <div class="text-center">{!!$usuarios->render()!!}</div>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@stop