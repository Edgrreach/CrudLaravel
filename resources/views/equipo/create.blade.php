@extends('layouts.plantillabase')

@section('contenido')

<div class="d-grid gap-3 mt-4">
<h3 class="display-6">Crear registro de equipo:</h3>
</div>
<form action="/equipo" method="POST">
    @csrf
   
  <select name="tipo" class="form-select" aria-label="Default select example">
  <label for="" class="form-label">Tipo de equipo:</label>
     <option value="Laptop">Equipo Laptop</option>
     <option value="Escritorio">Equipo  Escritorio</option>
  </select>

  <div class="mb-3">
    <label for="" class="form-label">Marca:</label>
    <input type="text" name="marca" class="form-control" id="marca">
  </div>

  <div class="mb-3 ">
  <label for="" class="form-label">codigo:</label>
    <input type="text" name="serial" class="form-control" id="serial">
  </div>

  <div class="mb-3 ">
  <label for="" class="form-label">Modelo:</label>
    <input type="TEXT" name="modelo" class="form-control" id="modelo">
  </div>

  <select name="estatus" class="form-select" aria-label="Default select example">
  <label for="" class="form-label">Estatus:</label>
     
     <option value="alta">Alta</option>
  </select>
  </div>
 <!--  <div class="mb-3 ">
  <select name="estatus" class="form-select" aria-label="Default select example">
  <label for="" class="form-label">Estatus:</label>
     
     <option value="stock">Stock</option>
  </select>
  </div>

 ACORDEON PARA PODER ASIGNAR -->
  <div class="accordion-item mb-3">
    <h2 class="accordion-header bg-warning" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        ASIGNAR A UN EMPLEADO
      </button>
    </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <select name="empleado_id" class="form-select" aria-label="Default select example">
            @foreach($empleados as $catego)
            <option value="{{$catego->id}}">{{$catego->nombre_emp}}</option>

            @endforeach
        </select>
      </div>
  </div>
  <!--ermino de acrodeon-->
  <a class="btn btn-danger" href="/equipo" role="button">Cancelar</a>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
@endsection