@extends('panel.template')
@section("contenido")
       <h3><i class="fa fa-angle-right"></i> Registro de Usuario</h3>
       
       <!-- BASIC FORM ELELEMNTS -->
       <div class="row mt">
           <div class="col-lg-12">
           <div class="form-panel">
                 <h4 class="mb"><i class="fa fa-angle-right"></i> Editar Usuario</h4>
                 {!!Form::model($usuario, ['route' => ['usuarios.update', $usuario->id],'class'=>'form-horizontal style-form','method'=>'PUT','files'=>true])!!}
                   @include("panel.usuario.form.form")
                    <div class="form-group">       
                    <div class="col-sm-12">                
                       {!!Form::submit('Registrar',['class'=>'btn btn-theme btn-block'])!!}
                      </div>
                    </div>
                    <div class="form-group">       
                        <div class="col-sm-12 center-block">                
                        <a href="" class="btn btn-primary btn-block " ><i class="fa fa-chevron-circle-left"></i> Regresar</a>
                        </div>
                    </div>
                {!!Form::close()!!}
           </div>
           </div><!-- col-lg-12-->      	
       </div><!-- /row -->
       @stop
       <!-- INLINE FORM ELELEMNTS -->
       