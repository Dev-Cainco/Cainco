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
        $empresa = Empresa::orderBy('id','desc')->paginate('5');
        return view('panel.empresa.index',compact('empresa'));
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
       // dd($request->all());
        Empresa::create([
            'usuario_id'=>Auth::user()->id,
            'nombre'=>$request->nombre,
            'categoria_id'=>$request->categoria_id,
            'pagos_id'=>$request->pagos_id,
            'email'=>$request->email,
            'descripcion'=>$request->descripcion,
            'password'=>$request->password,
            'direccion'=>$request->direccion,
            'sitio_web'=>$request->sitio_web,
            'imagen'=>$request->imagen
        ]);
        return redirect()->route('empresa.index');
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
        $categorias = Categoria::orderBy('id','desc')->pluck('nombre','id');
        $pagos = Pago::orderBy('id','desc')->pluck('tipo_pago','id');
        $empresa = Empresa::find($id);
        return view('panel.empresa.edit',compact('categorias','pagos','empresa'));
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
        $empresa = Empresa::find($id);
        $empresa->fill([
            'nombre'=>$request->nombre,
            'email'=>$request->email,
            'descripcion'=>$request->descripcion,
            'password'=>$request->password,
            'direccion'=>$request->direccion,
            'imagen'=>$request->imagen,
            'sitio_web'=>$request->sitio_web
        ]);
        $empresa->save();
        return redirect()->route('empresa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = Empresa::find($id);
        if($empresa->estado == 1)
        {
            $empresa->fill([
                'estado'=>'0'
            ]);
            return redirect()->route('empresa.index');
        }else
        {
            $empresa->fill([
                'estado'=>'1'
            ]);
            return redirect()->route('empresa.index');
        }
    }
}
