<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Carrera;
use Datatables;
use App\DataTables\UsersDataTable;

class controladorUsuario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=User::orderBy('id','desc')->paginate(5);
        return view('panel.usuario.index');
    }
    public function getUser(UsersDataTable $dataTable)
    {
        /*$usuarios=User::all();
        return Datatables::of($usuarios)
            ->addColumn('action',function ($usuario){
                return '<a href="'.$usuario->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> </a>
                <a href="#" data-target="#modal-detalle-'.$usuario->id.'" data-toggle="modal" class="btn btn-warning btn-xs">
                <i class="fa fa-eye"></i></a>
                <div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-detalle-'.$usuario->id.'">
		
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"></span>
                                </button>
                                <h4 class="modal-title">Datos del Destinatario</h4>
                                </div>
                                <div class="modal-body">
                                <dl class="row">
                                    <dt class="col-sm-6">Carnet de Identidad :</dt>
                                    <dd class="col-sm-6">'.$usuario->ci.'</dd>      
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-6">Carrera :</dt>
                                    <dd class="col-sm-6">'.$usuario->carrera_id.'</dd>      
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-6">Turno :</dt>
                                    <dd class="col-sm-6">'.$usuario->turno.'</dd>      
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-6">Telefono :</dt>
                                    <dd class="col-sm-6">'.$usuario->telefono.'</dd>      
                                </dl>
                                </div>
                            <div class="modal-footer">
                                <div class="form-group"> 
                                <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>';
            })
            ->make(true);*/
            return $dataTable->render('panel.usuario.index');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carreras=Carrera::orderBy('id','desc')->pluck('nombre','id');
        $turnos = ['Mañana','Tarde','Turno Completo'];
        return view('panel.usuario.crear',compact('turnos','carreras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        User::create(
            [
                'nombre'=>$request->nombre,
                'apellidoP'=>$request->apellidoP,
                'apellidoM'=>$request->apellidoM,
                'ci'=>$request->ci,
                'turno'=>$request->turno,
                'email'=>$request->email,
                'telefono'=>$request->telefono,
                'password'=>$request->password,
                'imagen'=>$request->imagen,
                'carrera_id'=>$request->carrera,
            ]
        );
        return redirect()->route('usuarios.index');
    }

    public function show($id)
    {
        $usuario = User::find($id);

        if(($usuario->estado) == '1'){
            $usuario->fill([
                'estado'=>0
            ]);
            $usuario->save();
            return redirect()->route('usuarios.index');
        }else{
            $usuario->fill([
                'estado'=>1
            ]);
            $usuario->save();
            return redirect()->route('usuarios.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carreras=Carrera::orderBy('id','desc')->pluck('nombre','id');
        $usuario=User::find($id);
        return view('panel.usuario.editar',compact('usuario','carreras','turnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario= User::find($id);
        $usuario->fill(
            [
                'nombre'=>$request->nombre,
                'apellidoP'=>$request->apellidoP,
                'apellidoM'=>$request->apellidoM,
                'ci'=>$request->ci,
                'turno'=>$request->turno,
                'email'=>$request->email,
                'telefono'=>$request->telefono,
                'password'=>$request->password,
                'imagen'=>$request->imagen,
                'carrera_id'=>$request->carrera,
            ]
        );
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario= User::find($id);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
