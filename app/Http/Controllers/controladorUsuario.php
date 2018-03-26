<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Carrera;
use Datatables;
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
    public function getUser()
    {
        $usuarios=User::all();
        return Datatables::of($usuarios)
            ->addColumn('action',function ($usuario){
                return '<a href="'.$usuario->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
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
        //
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
