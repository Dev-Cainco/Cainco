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
                    <table id="users-table" class="table table-bordered table-striped">
                        <thead>

                               <tr>
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
                                <th>Nombre</th>
                                  <th>Apellido Paterno</th>
                                  <th>Editar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop
@section('script')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{route('getUser')}}',
        columns: [
            { data: 'nombre', name: 'nombre' },
            { data: 'apellidoP', name: 'apellidoP' },
            { data: 'apellidoM', name: 'apellidoM' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@stop