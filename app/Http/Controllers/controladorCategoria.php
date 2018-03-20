<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
class controladorCategoria extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categorias=Categoria::orderBy('id','desc')->paginate(5);
        return view('panel.categoria.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categoria=Categoria::orderBy('nombre','desc')->pluck('nombre');
          //return view('panel.categoria.create',compact('categoria');

            return view('panel.categoria.create'); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Categoria::create(
            [
                'nombre'=>$request->nombre,

            ]

        );

        return redirect()->route('categoria.index');
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
      
        $categoria=Categoria::find($id);
        return view('panel.categoria.editar',compact('categoria'));
     
     //return view('panel.categoria.edit',compact('nombre'));

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
        
      $categoria= Categoria::find($id);
        $usuario->fill(
            [
                'nombre'=>$request->nombre,
            ]
        );
        $categoria->save();
        return redirect()->route('categoria.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $categoria= Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
}
