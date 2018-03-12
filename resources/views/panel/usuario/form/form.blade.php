<div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
        {{Form::text('nombre',null,['class'=>'form-control round-form','autofocus','required'])}}
    </div>
</div>
<div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Apellido Paterno</label>
        <div class="col-sm-10">
            {{Form::text('apellidoP',null,['class'=>'form-control round-form','required'])}}
        </div>
</div>
<div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Apellido Materno</label>
        <div class="col-sm-10">
            {{Form::text('apellidoM',null,['class'=>'form-control round-form','required'])}}
        </div>
</div>
<div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Cedula de Identidad</label>
        <div class="col-sm-10">
            {{Form::number('ci',null,['class'=>'form-control round-form','required'])}}
        </div>
</div>
<div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Turno</label>
        <div class="col-sm-10">
            {!!Form::select('turno', ['Mañana' => 'Mañana', 'Tarde' => 'Tarde','TurnoCompleto'=>'Turno Completo'],null,['class' => 'form-control round-form'])!!}
        </div>
</div>
<div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Correo ELectronico</label>
        <div class="col-sm-10">
            {{Form::email('email',null,['class'=>'form-control round-form','required'])}}
        </div>
</div>
<div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Contraseña</label>
        <div class="col-sm-10">
            {{Form::password('password',['class'=>'form-control round-form','required'])}}   
        </div>
    </div>
<div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Confirmar Contraseña</label>
        <div class="col-sm-10">
            {!!Form::password('password_confirmation',['class' => 'form-control round-form'])!!}
        </div>
</div>
<div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Telefono</label>
        <div class="col-sm-10">
            {{Form::number('telefono',null,['class'=>'form-control round-form','required'])}}
        </div>
</div>
<div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Foto de Perfil</label>
    <div class="col-sm-10">
        {{Form::file('imagen',null,['class'=>'form-control round-form','required'])}}
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Carrera</label>
    <div class="col-sm-10">
        {!!Form::select('carrera', $carreras,null,['class' => 'form-control round-form'])!!}
    </div>
</div>

