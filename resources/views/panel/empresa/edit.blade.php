@extends('panel.template')
@section('contenido')
<h3><i class="fa fa-angle-right"></i> Form Components</h3>
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
	<div class="col-lg-12">
      <div class="form-panel">
      	  <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                 {!!Form::model($empresa, ['route' => ['empresa.update', $empresa->id],'class'=>'form-horizontal style-form','method'=>'PUT','files'=>true])!!}
              @include('panel.empresa.form.form')
              <div class="form-group col-xs-12 col-md-6">
              	<button type="button" class="btn btn-danger"><i class="fa fa-chevron-circle-left"></i> Cancelar</button>
              	{{Form::submit('Registrar',['class'=>'btn btn-primary'])}}
              </div>
              <div class="form-group"></div>
          {{Form::close()}}
      </div>
	</div><!-- col-lg-12-->      	
</div><!-- /row -->
@stop