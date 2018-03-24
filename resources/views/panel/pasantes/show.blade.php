<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-detalle-{{$pasantes->id}}">
		
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                <h4 class="modal-title">Datos del Pasante</h4>
                </div>
                <div class="modal-body">
                <dl class="row">
                    <dt class="col-sm-4">Universidad :</dt>
                    <dd class="col-sm-5">{{$pasantes->universidad_id}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Carrera :</dt>
                    <dd class="col-sm-6">{{$pasantes->carrera_id}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Nombre :</dt>
                    <dd class="col-sm-6">{{$pasantes->nombre}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Apellidos :</dt>
                    <dd class="col-sm-6">{{$pasantes->apellidoP .' '.$pasantes->apellidoM}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Carnet de identidad :</dt>
                    <dd class="col-sm-6">{{$pasantes->ci}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Turno :</dt>
                    <dd class="col-sm-6">{{$pasantes->turno}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Telefono :</dt>
                    <dd class="col-sm-6">{{$pasantes->telefono}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Email :</dt>
                    <dd class="col-sm-6">{{$pasantes->email}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Imagen :</dt>
                    <dd class="col-sm-6">
                    <img src="{{asset('imagen')}}/{{$pasantes->imagen}}" width="100px" height="100px"> </dd>     
                </dl>
            <div class="modal-footer">
                 <div class="form-group"> 
                <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
                 </div>
            </div>
        </div>
    </div>
     
</div>