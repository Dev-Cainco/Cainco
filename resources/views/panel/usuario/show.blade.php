<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-detalle-{{$usuario->id}}">
		
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                <h4 class="modal-title">Datos detallados del Usuario</h4>
                </div>
                <div class="modal-body">
                <dl class="row">
                    <dt class="col-sm-4">Carnet de Identidad :</dt>
                    <dd class="col-sm-6">{{$usuario->ci}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Carrera :</dt>
                    <dd class="col-sm-6">{{$usuario->carrera_id}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Turno :</dt>
                    <dd class="col-sm-6">{{$usuario->turno}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Telefono :</dt>
                    <dd class="col-sm-6">{{$usuario->telefono}}</dd>      
                </dl>
                </div>
            <div class="modal-footer">
                 <div class="form-group"> 
                <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal"><i class="fa fa-close"></i>  Cerrar</button>
                 </div>
            </div>
        </div>
    </div>
     
</div>