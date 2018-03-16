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
                                  <th><i class="fa fa-edit"></i> Fecha Registro</th>
                                    <th><i class="fa fa-edit"></i> Fecha Registro final</th>
                                  <th><i class="fa fa-edit"></i> Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($categoria as $categoria)
                              <tr> 
                                  <td>{{$categoria->nombre}}</td> 
                                  <td>{{$categoria->created_at}}</td>
                                  <td>
                                    {!!Form::open(['route'=>['categoria.destroy', $categoria->id], 'method' => 'DELETE'])!!}
                                    <a href="{{route('categoria.edit',$categoria->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <button href="" onclick="return confirm('Eliminar Registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    {!!Form::close()!!}
                                  </td>       
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                      <div class="text-center">{!!$categoria->render()!!}</div>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@stop