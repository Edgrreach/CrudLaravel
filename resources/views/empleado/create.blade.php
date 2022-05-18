@extends('layouts.plantillabase')

@section('contenido')

<div class="d-grid gap-3 mt-4">
<h3 class="display-6">Crear registro de empleados:</h3>
</div>
<form action="/empleado" method="POST">
    @csrf
   
  <div class="mb-3">
    <label for="" class="form-label">Nombre:</label>
    <input type="text" name="nombre_emp" class="form-control" id="nombre">
  </div>
  <div class="mb-3">
  <select name="area_id" class="form-select" aria-label="Default select example">
            @foreach($ares as $catego)
            <option value="{{$catego->id}}">{{$catego->nom_area}}</option>

            @endforeach
        </select>
  </div>
  <div class="mb-3 ">
  <label for="" class="form-label">Estatus:</label>
  <select name="estatus_emp" class="form-select" aria-label="Default select example"> 
     <option value="1">Activo</option>
     <option value="0">Inactivo</option>
  </select>
  </div>
  <a class="btn btn-danger" href="/empleado" role="button">Cancelar</a>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
@endsection