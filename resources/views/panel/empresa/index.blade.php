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
                                  <th><i class="fa fa-edit"></i>Usuario</th>
                                  <th><i class="fa fa-edit"></i>Tipo de Empresa</th>
                                  <th><i class="fa fa-edit"></i>Nombre</th>
                                  <th><i class="fa fa-edit"></i>Tipo de Pago</th>
                                  <th><i class="fa fa-edit"></i>Email</th>
                                  <th><i class="fa fa-edit"></i>Descripcion</th>
                                  <th><i class="fa fa-edit"></i>Direccion</th>
                                  <th><i class="fa fa-edit"></i>Sitio Web</th>
                                  <th><i class="fa fa-edit"></i>Imagen</th>
                                  <th><i class="fa fa-edit"></i>Fecha Creacion</th>
                                  <th><i class="fa fa-edit"></i>Opciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($empresa as $empre)
                              <tr> 
                                  <td>{{$empre->usuario_id}}</td>
                                  <td>{{$empre->categoria_id}}</td>
                                  <td>{{$empre->nombre}}</td>
                                  <td>{{$empre->pagos_id}}</td>
                                  <td>{{$empre->email}}</td>
                                  <td>{{$empre->descripcion}}</td>
                                  <td>{{$empre->direccion}}</td>
                                  <td>{{$empre->sitio_web}}</td>
                                  <td width="50px"><img src="{{asset('imagen')}}/{{$empre->imagen}}" alt="" width="50px"></td> 
                                  <td>{{$empre->created_at}}</td>
                                  <td>
                                    {!!Form::open(['route'=>['empresa.destroy', $empre->id], 'method' => 'DELETE'])!!}
                                    <a href="{{route('empresa.edit',$empre->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    {!!Form::close()!!}
                                  </td>       
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                      <div class="text-center">{!!$empresa->render()!!}</div>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@stop