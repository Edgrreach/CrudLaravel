<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Equipo;
use App\Models\Equipo2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$equipo = Equipo::all();
        //return view ('equipo.index')->with('equipo',$equipo);
       $equipo = DB::table('empleados')
       ->rightJoin('equipos', 'empleados.id', '=', 'equipos.empleado_id')
       ->where('estatus','=','alta')
        ->get();
        return view ('equipo.index')->with('equipo',$equipo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleado::all();
        return view('equipo.create',compact('empleados'));
       // return view('equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipo = new Equipo();
        
        $equipo->tipo = $request->get('tipo');
        $equipo->marca = $request->get('marca');
        $equipo->serial = $request->get('serial');
        $equipo->modelo = $request->get('modelo');
        $equipo->estatus = $request->get('estatus');
        $equipo->empleado_id = $request->get('empleado_id');
        $equipo->save();
        return redirect('/equipo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $empleados = Empleado::all();
       // return view('equipo.create',compact('empleados'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     *  @param  \App\Models\Equipo2  $equipo2
     * @return \Illuminate\Http\Response
     */
    public function edit($equipo)
    {
        $equipos = Equipo::find($equipo);
        return view('equipo.edit')->with('equipos',$equipos);  

    }
    
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equipo = Equipo::find($id);
        
        $equipo->tipo = $request->get('tipo');
        $equipo->marca = $request->get('marca');
        $equipo->serial = $request->get('serial');
        $equipo->modelo = $request->get('modelo');
        $equipo->estatus = $request->get('estatus');
        $equipo->empleado_id = $request->get('empleado_id');
        
        $equipo->save();
        return redirect('/equipo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipos = Equipo::find($id);
        $equipos->delete();
        return redirect('/equipo');


    }
    
}
