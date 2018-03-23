<div class="box-body">
    <div class="form-group col-xs-12 col-md-6">
        <label>Universidad</label>
            {{Form::select('universidad_id',$universidad,null,['class'=>'form-control','autofocus','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label>Carrera</label>
                {{Form::select('carrera_id',$carrera,null,['class'=>'form-control','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label>Nombre</label>
                {{Form::text('nombre',null,['class'=>'form-control','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label>Apellido Paterno</label>
                {{Form::text('apellidoP',null,['class'=>'form-control','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label>Apellido Materno</label>
                {{Form::text('apellidoM',null,['class'=>'form-control round-form','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label>Carnet de Identidad</label>
                {{Form::text('ci',null,['class'=>'form-control round-form','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label>Password</label>
                {{Form::password('password',['class'=>'form-control round-form','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label>Confirmar Password</label>
                {!!Form::password('password_confirmation',['class' => 'form-control round-form','requerid'])!!}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label>Turno</label>
                {!!Form::select('turno', ['Mañana' => 'Mañana', 'Tarde' => 'Tarde','TurnoCompleto'=>'Turno Completo'],null,['class' => 'form-control round-form'])!!}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label>Correo ELectronico</label>
                {{Form::email('email',null,['class'=>'form-control round-form','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label>Telefono</label>
                {{Form::number('telefono',null,['class'=>'form-control round-form','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label>Fecha de Inicio</label>
                {{Form::date('fecha_inicio',null,['class'=>'form-control round-form','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label>Total Horas</label>
                {{Form::time('total_horas',null,['class'=>'form-control round-form','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-12">
        <label>Foto de Perfil</label>
            {{Form::file('imagen',null,['class'=>'form-control round-form','required'])}}
    </div>
</div>