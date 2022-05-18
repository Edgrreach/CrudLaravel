@extends('layouts.plantillabase')

@section('css')
<link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="style"> 
@endsection

@section('contenido')
<div class="d-grid gap-3 mt-4">
    <a class="btn btn-primary" href="equipo/create" role="button">Crear</a>
</div>

<div class="d-grid gap-3 mt-4">
    <h3 class="display-6">Tabla de equipos:</h3>
</div>

<table id="example" class="table table-hover mt-4 " style="width: 100%">
    <thead>
   <tr>
       <th>Tipo</th>
       <th>Marca</th>
       <th>Serial</th>
       <th>Modelo</th>
       <th>Estatus</th>
       <th>Asignado</th>
       <th>Acciones</th>
       

   </tr>
   </thead>
   <tbody>
     @foreach ($equipo as $ep)
       <tr>
           <td>{{$ep->tipo}}</td>
           <td>{{$ep->marca}}</td>
           <td>{{$ep->serial}}</td>
           <td>{{$ep->modelo}}</td>
           <td>{{$ep->estatus}}</td>
        <!--CONDICIONAL ASIGNACIÓN-->
           @if(is_null($ep->empleado_id))
           <td class="alert alert-danger"><div class="alert alert-danger" role="alert"> no Asignado</div></td>
           @else
           <td class="alert alert-success"><div class="alert alert-success" role="alert"> {{$ep->nombre_emp}} </div></td>
            @endif     
        <!--BOTONES DE ACCIONES-->    
           <td>
                
                    
                <a  href="/are/{{$ep->id}}/edit"><i class="bi bi-trash3-fill text-danger"></i></a>
                <a  href="/equipo/{{$ep->id}}/edit"><i class="bi bi-pencil-square text-primary"></i></a> 
                
           </td>
       </tr>
       @endforeach
   </tbody>
</table>
@section('js') 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script> 
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
@endsection
@endsection