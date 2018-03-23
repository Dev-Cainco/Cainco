<div class="box-body">
    <div class="form-group col-xs-12 col-md-6">
        <label class="control-label">Nombre</label>
            {{Form::text('nombre',null,['class'=>'form-control round-form','autofocus','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label class="control-label">Apellido Paterno</label>
                {{Form::text('apellidoP',null,['class'=>'form-control round-form','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label class="control-label">Apellido Materno</label>
                {{Form::text('apellidoM',null,['class'=>'form-control round-form','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label class="control-label">Cedula de Identidad</label>
                {{Form::number('ci',null,['class'=>'form-control round-form','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label class="control-label">Turno</label>
                {!!Form::select('turno', ['Mañana' => 'Mañana', 'Tarde' => 'Tarde','TurnoCompleto'=>'Turno Completo'],null,['class' => 'form-control round-form'])!!}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label class="control-label">Correo ELectronico</label>
                {{Form::email('email',null,['class'=>'form-control round-form','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label class="control-label">Contraseña</label>
                {{Form::password('password',['class'=>'form-control round-form','required'])}}   
        </div>
    <div class="form-group col-xs-12 col-md-6">
            <label class="control-label">Confirmar Contraseña</label>
                {!!Form::password('password_confirmation',['class' => 'form-control round-form'])!!}
    </div>
    <div class="form-group col-xs-12 col-md-6">
            <label class="control-label">Telefono</label>
                {{Form::number('telefono',null,['class'=>'form-control round-form','required'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
        <label class="control-label">Carrera</label>
            {{Form::select('carrera', $carreras,null,['class' => 'form-control round-form'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
        <label class="control-label">Foto de Perfil</label>
            {{Form::file('imagen',null,['class'=>'form-control round-form','required'])}}
    </div>
</div>

