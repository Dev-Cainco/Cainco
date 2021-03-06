@extends('panel.template')
@section('contenido')           
@if(\Session::has('message'))
    @include('alerts.message')
@endif  
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Universidades</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-6" style="padding-left: 920px;">
                    <a href="{{route('universidad.create')}}">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>  &nbsp;&nbsp;&nbsp;&nbsp; Agregar</button>
                    </a>
                </div><br><br><br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                               <tr>
                                  <th>Nombre</th>
                                  <th>Opciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($universidad as $universi)
                              <tr> 
                                  <td>{{$universi->nombre}}</td>
                                  <td>
                                    {!!Form::open(['route'=>['universidad.destroy', $universi->id], 'method' => 'DELETE'])!!}
                                    <a href="{{route('universidad.edit',$universi->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                    <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                                    {!!Form::close()!!}
                                  </td>       
                              </tr>
                              @endforeach
                               </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop