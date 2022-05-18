@extends('layouts.plantillabase')

@section('contenido')

<div class="row">
    <div class="col-4">

    </div>
    <div class="col-4">
    <div class="d-grid gap-3 mt-4">
<h3 class="display-6">¿Desea eliminar este equipo?</h3>
</div>

    </div>
</div>




<div class="container-fluid"> 
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <form action="/equipo/{{$equipos->id}}" method="POST">
    @csrf
    @method('PUT')
       
    <select name="tipo" class="form-select" aria-label="Default select example">
  <label for="" class="form-label">Tipo de equipo:</label>
  <option value="{{$equipos->tipo}}">{{$equipos->tipo}}</option>
     <option value="Laptop">Equipo Laptop</option>
     <option value="Escritorio">Equipo  Escritorio</option>
  </select>

 
    
    <input type="text" name="marca" class="form-control" id="marca" value="{{$equipos->marca}}">


 
    <input type="text" name="serial" class="form-control" id="serial" value="{{$equipos->serial}}">
  

 
  <label for="" class="form-label">Modelo:</label>
    <input type="TEXT" name="modelo" class="form-control" id="modelo" value="{{$equipos->modelo}}">
 

  <select name="estatus" class="form-select" aria-label="Default select example">
  
     <option value="baja">Eliminar</option>
  </select>

 
  <!--PRINCIPIO DE ACORDEON-->
  <div class="accordion-item mb-3">
    <h2 class="accordion-header bg-warning" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      EMPLEADO
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
  <button type="submit" class="btn btn-primary">Eliminar</button>
</form>

        </div>
    </div>
</div>
@endsection