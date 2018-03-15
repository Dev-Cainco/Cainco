<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pasante;
use App\Universidad;
use App\Carrera;

class controllerPasantes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasante = Pasante::orderBy('id','desc')->paginate('5');    
        return view('panel.pasantes.index',compact('pasante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $universidad = Universidad::orderBy('id','desc')->pluck('nombre','id');
        $carrera = Carrera::orderBy('id','desc')->pluck('nombre','id'); 
        $turno = ['Manana','Tarde','Turno Completo'];
        return view('panel.pasantes.create',compact('universidad','carrera','turno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pasante::create([
            'universidad_id'=>$request->universidad_id,
            'carrera_id'=>$request->carrera_id,
            'nombre'=>$request->nombre,
            'apellidoP'=>$request->apellidoP,
            'apellidoM'=>$request->apellidoM,
            'ci'=>$request->ci,
            'password'=>$request->password,
            'turno'=>$request->turno,
            'email'=>$request->email,
            'telefono'=>$request->telefono,
            'imagen'=>$request->imagen,
            'fecha_inicio'=>$request->fecha_inicio,
            'total_horas'=>$request->total_horas
        ]);
        return redirect()->route('pasantes.index');
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
        $universidad = Universidad::orderBy('id','desc')->pluck('nombre','id');
        $carrera = Carrera::orderBy('id','desc')->pluck('nombre','id');
        $turno = ['Manana','Tarde','Turno Completo'];
        $pasante = Pasante::find($id);
        return view('panel.pasantes.edit',compact('universidad','carrera','turno','pasante'));
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
        $pasantes = Pasante::find($id);

        $pasantes->fill([
            'universidad_id'=>$request->universidad_id,
            'carrera_id'=>$request->carrera_id,
            'nombre'=>$request->nombre,
            'apellidoP'=>$request->apellidoP,
            'apellidoM'=>$request->apellidoM,
            'ci'=>$request->ci,
            'password'=>$request->password,
            'turno'=>$request->turno,
            'email'=>$request->email,
            'telefono'=>$request->telefono,
            'imagen'=>$request->imagen,
            'fecha_inicio'=>$request->fecha_inicio,
            'total_horas'=>$request->total_horas
        ]);
        $pasantes->save();
        return redirect()->route('pasantes.index');
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
