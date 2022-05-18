@extends('layouts.plantillabase')

@section('css')
<link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="style"> 
@endsection

@section('contenido')
<div class="d-grid gap-3 mt-4">
    <a class="btn btn-primary" href="empleado/create" role="button">Crear</a>
</div>

<div class="d-grid gap-3 mt-4">
    <h3 class="display-6">Tabla de empleados:</h3>
</div>

<table id="example" class="table table-hover mt-4 " style="width: 100%;">
    <thead>
   <tr>
       <th>ID Empleado</th>
       <th>Nombre</th>
       <th>Área</th>
       <th>Estatus</th>
       <th>Acciones</th>
   </tr>
   </thead>
   <tbody>
     @foreach ($empleado as $emp)
       <tr>
           <td>{{$emp->id}}</td>
           <td>{{$emp->nombre_emp}}</td>
           <td>{{$emp->nom_area}}</td>
           <td>{{$emp->estatus_emp}}</td>
           <td>
               <form action="{{route('empleado.destroy',$emp->id)}}" method="POST">
      
               @csrf
               @method('PUT')
                    
               <a  href="/eco/{{$emp->id}}/edit"><i class="bi bi-trash3-fill text-danger"></i></a>
                    <a  href="/empleado/{{$emp->id}}/edit"><i class="bi bi-pencil-square text-primary"></i></a> 
               </form>
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
