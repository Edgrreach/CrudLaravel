@extends('layouts.plantillabase')

@section('contenido')

<div class="d-grid gap-3 mt-4">
<h3 class="display-6">Editar registro de EQUIPOs:</h3>
</div>
<form action="/equipo/{{$equipos->id}}" method="POST">
    @csrf
    @method('PUT')
       
    <select name="tipo" class="form-select" aria-label="Default select example">
  <label for="" class="form-label">Tipo de equipo:</label>
  <option value="{{$equipos->tipo}}">{{$equipos->tipo}}</option>
     <option value="Laptop">Equipo Laptop</option>
     <option value="Escritorio">Equipo  Escritorio</option>
  </select>

  <div class="mb-3">
    <label for="" class="form-label">Marca:</label>
    <input type="text" name="marca" class="form-control" id="marca" value="{{$equipos->marca}}">
  </div>

  <div class="mb-3 ">
  <label for="" class="form-label">codigo:</label>
    <input type="text" name="serial" class="form-control" id="serial" value="{{$equipos->serial}}">
  </div>

  <div class="mb-3 ">
  <label for="" class="form-label">Modelo:</label>
    <input type="TEXT" name="modelo" class="form-control" id="modelo" value="{{$equipos->modelo}}">
  </div>

  <select name="estatus" class="form-select" aria-label="Default select example">
  <label for="" class="form-label">Estatus:</label>
  <option value="{{$equipos->estatus}}">{{$equipos->estatus}}</option>
  <option value="alta">alta</option>
     
  </select>

 
  <!--PRINCIPIO DE ACORDEON-->
  <div class="accordion-item mb-3">
    <h2 class="accordion-header bg-warning" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        ASIGNAR A UN EMPLEADO
      </button>
    </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <select name="empleado_id" class="form-select" aria-label="Default select example">
          <option value="{{$equipos->empleado_id}}">{{$equipos->empleado_id}}</option>

         
        </select>
      </div>
  </div>
  <!--ermino de acrodeon-->

  
  
  <a class="btn btn-danger" href="/equipo" role="button">Cancelar</a>
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection

