<?php

namespace App\Http\Controllers;

use App\Models\dni;
use Illuminate\Http\Request;

class DniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $datos["dnis"]=Dni::paginate();
        return view("dni.index",$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('dni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //recuperame todo
       $datosDni=request()->all();
       $datosDni=request()->except('_token');
       Dni::insert($datosDni);
       // return response()->json($datosEstudiante);redirect('estudiantes');
      return redirect("dnis"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dni  $dni
     * @return \Illuminate\Http\Response
     */
    public function show(dni $dni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dni  $dni
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $dni =Dni::findorFail($id); 
        return view("dni.editar",compact("dni"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dni  $dni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 
        $datosDni=request()->all();        
        $datosDni=request()->except('_token','_method');     

        Dni::where('id','=',$id)->update($datosDni);
        return redirect('dnis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dni  $dni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
        Dni::destroy($id); 
        return redirect("dnis");
    }
}
