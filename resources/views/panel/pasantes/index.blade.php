@extends('panel.template')
@section('contenido')           
                  @if(\Session::has('message'))
                      @include('alerts.message')
                  @endif  
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4 class="text-center"><i class="fa fa-user"></i>Lista de Empresas</h4>
                            <hr>
                              <thead>
                               <tr>
                                  <th><i class="fa fa-edit"></i>Imagen</th>
                                  <th><i class="fa fa-edit"></i>Nombre</th>
                                  <th><i class="fa fa-edit"></i>Apellido</th>
                                  <th><i class="fa fa-edit"></i>Universidad</th>
                                  <th><i class="fa fa-edit"></i>Carrera</th>
                                  <th><i class="fa fa-edit"></i>CI</th>
                                  <th><i class="fa fa-edit"></i>Turno</th>
                                  <th><i class="fa fa-edit"></i>Telefono</th>
                                  <th><i class="fa fa-edit"></i>Fecha Inicio</th>
                                  <th><i class="fa fa-edit"></i>Total Horas</th>
                                  <th><i class="fa fa-edit"></i>Opciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($pasante as $pasantes)
                              <tr> 
                                  <td width="50px"><img src="{{asset('imagen')}}/{{$pasantes->imagen}}" alt="" width="50px"></td> 
                                  <td>{{$pasantes->nombre}}</td>
                                  <td>{{$pasantes->apellidoP}}</td>
                                  <td>{{$pasantes->universidad_id}}</td>
                                  <td>{{$pasantes->carrera_id}}</td>
                                  <td>{{$pasantes->ci}}</td>
                                  <td>{{$pasantes->turno}}</td>
                                  <td>{{$pasantes->telefono}}</td>
                                  <td>{{$pasantes->fecha_inicio}}</td>
                                  <td>{{$pasantes->total_horas}}</td>
                                  <td>{{$pasantes->created_at}}</td>
                                  <td>
                                    {!!Form::open(['route'=>['pasantes.destroy', $pasantes->id], 'method' => 'DELETE'])!!}
                                    <a href="{{route('pasantes.edit',$pasantes->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    {!!Form::close()!!}
                                  </td>       
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                      <div class="text-center">{!!$pasante->render()!!}</div>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@stop