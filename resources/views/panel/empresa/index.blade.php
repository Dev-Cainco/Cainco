@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Empresas</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-6" style="padding-left: 920px;">
                    <a href="{{route('empresa.create')}}">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>  &nbsp;&nbsp;&nbsp;&nbsp; Agregar</button>
                    </a>
                </div><br><br><br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Facebook</th>
                                <th>Ciudad</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empresa as $empresas)
                            <tr>
                                <td><img src="{{asset('imagen')}}/{{$empresas->imagen}}" width="40px" height="40px"></td>
                                <td>{{$empresas->nombre}}</td>
                                <td>{{$empresas->telefono}}</td>
                                <td>{{$empresas->email}}</td>
                                <td>{{$empresas->facebook}}</td>
                                <td>{{$empresas->ciudad_id}}</td>
                                <td>
                                  <a href="#" data-target="#modal-detalle-{{$empresas->id}}" data-toggle="modal" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                  
                                  <a href="{{route('empresa.edit',$empresas->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                  
                                  @if(($empresas->estado) == '1')
                                    <a href="{{route('empresa.show',$empresas->id)}}">
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>
                                    </a>
                                  @else
                                    <a href="{{route('empresa.show',$empresas->id)}}">
                                    <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                                    </a>
                                  @endif
                                  {!!Form::close()!!}
                                </td> 
                            </tr>
                            @include('panel.empresa.show')                        
                            @endforeach                   
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Facebook</th>
                                <th>Ciudad</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop