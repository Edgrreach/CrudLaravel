<?php

namespace App\Http\Controllers;

use App\Models\Eco;
use App\Models\Empleado;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EcoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Equipo $sql)
    {
        $sql = "SELECT * FROM empleados as a
        inner join equipos as b on a.id=b.id ";
        return view ('eco.index')->with('equipo',$sql);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eco  $eco
     * @return \Illuminate\Http\Response
     */
    public function show(Eco $eco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eco  $eco
     * @return \Illuminate\Http\Response
     */
    public function edit($eco)
    {
        $eco = Empleado::find($eco);
            return view('eco.edit')->with('empleados',$eco);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eco  $eco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eco $id)
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
     * @param  \App\Models\Eco  $eco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eco $eco)
    {
        //
    }
}
