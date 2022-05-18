<?php

namespace App\Http\Controllers;

use App\Models\Are;
use App\Models\Equipo;
use Illuminate\Http\Request;

class AreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $are = Are::all();
        return view ('empleado.index')->with('are',$are);
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
    public function edit($are)
    {
        $are = Equipo::find($are);
            return view('are.edit')->with('equipos',$are); 
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
