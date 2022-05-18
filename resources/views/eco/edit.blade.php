@extends('layouts.plantillabase')

@section('contenido')

<div class="row">
    <div class="col-4">

    </div>
    <div class="col-4">
    <div class="d-grid gap-3 mt-4">
<h3 class="display-6">¿Desea eliminar este ususario</h3>
</div>

    </div>
</div>




<div class="container-fluid"> 
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <form action="/empleado/{{$empleados->id}}" method="POST">

@csrf
@method('PUT') 

<input  type="text" name="nombre_emp" class="form-control" id="nombre" value="{{$empleados->nombre_emp}}">

<input disbled type="text" name="area_id" class="form-control" id="area" value="{{$empleados->area_id}}">

<select name="estatus_emp" class="form-select" aria-label="Default select example"> 
 <option value="0">Eliminar</option>
</select>

<a class="btn btn-danger" href="/empleado" role="button">Cancelar</a>
<button type="submit" class="btn btn-primary">Eliminar</button>
</form>

        </div>
    </div>
</div>
@endsection