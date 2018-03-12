<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empresa;
use App\Categoria;
use App\Pago;
use Auth;

class controllerEmpresa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categorias = Categoria::orderBy('id','desc')->pluck('nombre','id');
        $pagos = Pago::orderBy('id','desc')->pluck('tipo_pago','id');
        return view('panel.empresa.create',compact('categorias','pagos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Empresa::create([
            'usuario_id'=>Auth::user()->id,
            'nombre'=>$request->$nombre,
            'categoria_id'=>$request->$categoria_id,
            'pagos_id'=>$request->$pagos_id,
            'email'=>$request->$email,
            'descripcion'=>$request->$descripcion,
            'password'=>$request->$password,
            'direccion'=>$request->$direccion,
            'sitio_web'=>$request->$sitio_web,
            'imagen'=>$request->$imagen
        ]);
        return redirect()->route('panel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
