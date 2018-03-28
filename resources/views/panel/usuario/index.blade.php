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
                </div>
                <div class="box-body table-responsive">
                    {!! $dataTable->table() !!}
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop
@section('script')
<script>
/*$(function() {
    $('#users-table').DataTable({
       
        buttons: [
            'copy'
        ],
        ajax: '{{route('getUser')}}',
        columns: [
            { data: 'nombre', name: 'nombre' },
            { data: 'apellidoP', name: 'apellidoP' },
            { data: 'apellidoM', name: 'apellidoM' },
            { data: 'action', name: 'action', orderable: false, searchable: false}
        ],
        language: {
             "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json",
        },   
      
        });
    });*/
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!! $dataTable->scripts() !!}
</script>
@stop