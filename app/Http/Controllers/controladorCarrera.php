<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;

class controladorCarrera extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras=Carrera::orderBy('id','desc')->paginate(5);
        return view('panel.carrera.index',compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       
        return view('panel.carrera.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
         Carrera::create(
            [
                'nombre'=>$request->nombre,

            ]

        );

        return redirect()->route('carrera.index');



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
        
  $carrera=Carrera::find($id);
        return view('panel.carrera.edit',compact('carrera'));

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
        
      $carrera= Carrera::find($id);
        $carrera->fill(
            [
                'nombre'=>$request->nombre,
            ]
        );
        $carrera->save();
        return redirect()->route('carrera.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrera= Carrera::find($id);
        $carrera->delete();
        return redirect()->route('carrera.index');
    }
}
