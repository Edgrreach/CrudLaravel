@extends('layouts.plantillabase')

@section('contenido')

<div class="d-grid gap-3 mt-4">
<h3 class="display-6">Eliminar:</h3>
</div>
<form action="/empleado/{{$empleados->id}}" method="POST">

    @csrf
    @method('PUT')
       
  <div class="mb-3">
    <label for="" class="form-label">Nombre:</label>
    <input type="text" name="nombre_emp" class="form-control" id="nombre" value="{{$empleados->nombre_emp}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Área:</label>
    <input type="text" name="area_id" class="form-control" id="area" value="{{$empleados->area_emp}}">
  </div>
  <div class="mb-3 ">
  <label for="" class="form-label">Estatus:</label>
  <select name="estatus_emp" class="form-select" aria-label="Default select example"> 
     <option value="0">Eliminado</option>
  </select>
  </div>
  <a class="btn btn-danger" href="/empleado" role="button">Cancelar</a>
  <button type="submit" class="btn btn-primary">Borrar</button>
</form>
@endsection