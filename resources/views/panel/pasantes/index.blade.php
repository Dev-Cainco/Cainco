@extends('panel.template')
@section('contenido')           
                  @if(\Session::has('message'))
                      @include('alerts.message')
                  @endif  
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Pasantes</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-6" style="padding-left: 920px;">
                    <a href="{{route('pasantes.create')}}">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>  &nbsp;&nbsp;&nbsp;&nbsp; Agregar</button>
                    </a>
                </div><br><br><br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                               <tr>
                                  <th>Imagen</th>
                                  <th>Nombre</th>
                                  <th>Apellido</th>
                                  <th>Universidad</th>
                                  <th>Carrera</th>
                                  <th>CI</th>
                                  <th>Turno</th>
                                  <th>Telefono</th>
                                  <th>Fecha Inicio</th>
                                  <th>Total Horas</th>
                                  <th>Opciones</th>
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
                                  <td>
                                    {!!Form::open(['route'=>['pasantes.destroy', $pasantes->id], 'method' => 'DELETE'])!!}
                                    <a href="{{route('pasantes.edit',$pasantes->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                    <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                                    {!!Form::close()!!}
                                  </td>       
                              </tr>
                              @endforeach
                               </tbody>
                        <tfoot>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Universidad</th>
                                <th>Carrera</th>
                                <th>CI</th>
                                <th>Turno</th>
                                <th>Telefono</th>
                                <th>Fecha Inicio</th>
                                <th>Total Horas</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop