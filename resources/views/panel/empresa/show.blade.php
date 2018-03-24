<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-detalle-{{$empresas->id}}">
        
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                <h4 class="modal-title">Datos detallados de la Empresa</h4>
                </div>
                <div class="modal-body">
                <dl class="row">
                    <dt class="col-sm-4">Usuario :</dt>
                    <dd class="col-sm-5">{{$empresas->usuario_id}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Nombre de la empresa :</dt>
                    <dd class="col-sm-6">{{$empresas->nombre}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Descripcion :</dt>
                    <dd class="col-sm-6">{{$empresas->descripcion}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Categoria :</dt>
                    <dd class="col-sm-6">{{$empresas->categoria_id}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Pago de la Empresa :</dt>
                    <dd class="col-sm-6">{{$empresas->pagos_id}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Email :</dt>
                    <dd class="col-sm-6">{{$empresas->email}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Direccion :</dt>
                    <dd class="col-sm-6">{{$empresas->direccion}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Sitio Web :</dt>
                    <dd class="col-sm-6">{{$empresas->sitio_web}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Imagen :</dt>
                    <dd class="col-sm-6">
                    <img src="{{asset('imagen')}}/{{$empresas->imagen}}" width="100px" height="100px"> </dd>     
                </dl>
            <div class="modal-footer">
                 <div class="form-group"> 
                <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
                 </div>
            </div>
        </div>
    </div>
     
</div>