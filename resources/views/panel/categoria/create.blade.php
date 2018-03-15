@extends('panel.template')
@section("contenido")
       <h3><i class="fa fa-angle-right"></i> Registro de Categoria</h3>
       
       <!-- BASIC FORM ELELEMNTS -->
       <div class="row mt">
           <div class="col-lg-12">
           <div class="form-panel">
                 <h4 class="mb"><i class="fa fa-angle-right"></i> Llene los datos del Formulario</h4>
                {{Form::open(['route'=>'categoria.store','class'=>'form-horizontal style-form','method'=>'POST','files'=>true])}}
                   @include("panel.categoria.form.form")
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
       <!-- INLINE FORM ELELEMNTS -->
       