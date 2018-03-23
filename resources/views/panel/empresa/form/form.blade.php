<div class="box-body">
    <div class="form-group col-xs-12 col-md-6">
        <label>Nombre</label>
        {{Form::text('nombre',null,['class'=>'form-control round-form','autofocus','requerid'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
        <label>Categoria</label>	
    	{{Form::select('categoria_id',$categorias,null,['class'=>'form-control round-form','requerid'])}}	
    </div>
    <div class="form-group col-xs-12 col-md-6">
        <label class="control-label">Tipo de Pago</label>	
    	{{Form::select('pagos_id',$pagos,null,['class'=>'form-control round-form','requerid'])}}	
    </div>
    <div class="form-group col-xs-12 col-md-6">
        <label class="control-label">Email</label>
        {{Form::text('email',null,['class'=>'form-control round-form','autofocus'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
        <label class="c:ontrol-label">Descripcion</label>
        {{Form::text('descripcion',null,['class'=>'form-control round-form','autofocus'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
        <label class="control-label">Password</label>
        {{Form::text('password',null,['class'=>'form-control round-form','autofocus','requerid'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
        <label class="control-label">Direccion</label>
        {{Form::text('direccion',null,['class'=>'form-control round-form','autofocus','requerid'])}}
    </div>
    <div class="form-group col-xs-12 col-md-6">
        <label class="control-label">Sitio Web</label>
        {{Form::text('sitio_web',null,['class'=>'form-control round-form','autofocus','requerid'])}}
    </div>
    <div class="form-group col-xs-12 col-md-12">
        <label class="control-label">Imagen</label>
        {{Form::file('imagen',null,['class'=>'form-control round-form','requerid'])}}
    </div>
</div>