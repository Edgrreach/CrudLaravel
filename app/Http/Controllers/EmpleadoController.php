<?php

namespace App\Http\Controllers;

use App\Models\Are;
use App\Models\Empleado;
use App\Models\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      $empleado = DB::table('ares')
       ->rightJoin('empleados', 'ares.id', '=', 'empleados.area_id')
       ->where('estatus_emp','=',1)
        ->get();
        return view ('empleado.index')->with('empleado',$empleado);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ares = Are::all();
        return view('empleado.create',compact('ares'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        
        $empleado->nombre_emp = $request->get('nombre_emp');
        $empleado->area_id = $request->get('area_id');
        $empleado->estatus_emp = $request->get('estatus_emp');
        $empleado->save();
        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show( $show)
    {
       //$shows = Empleado::find($show);
       //return view('empleado.show')->with('empleados',$shows);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
   
   
     public function edit($empleado)
    {
        
            $empleados = Empleado::find($empleado);
            return view('empleado.edit')->with('empleados',$empleados);   
       
    }
   

 

   
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $emp = Empleado::find($id);
        
        $emp->nombre_emp = $request->get('nombre_emp');
        $emp->area_id = $request->get('area_id');
        $emp->estatus_emp = $request->get('estatus_emp');

        $emp->save();
        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $emp = DB::table('empleados')
        ->where('id', $id)
        ->update(['estatus_emp' => 1]);

        

        return redirect('/empleado',$id);

    }
}
