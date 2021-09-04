@extends('layouts.plantillabase');

@section('contenido')
<a href="empleados/create" class="btn btn-info btn-lg">AGREGAR EMPLEADO</a>


<table class="table table-hover">
          <thead class="thead-inverse">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Codigo</th>
              <th scope="col">Nombres</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Direccion</th>
              <th scope="col">Telefonos</th>
              <th scope="col">Puestos</th>
              <th scope="col">Nacimiento</th>
              <th scope="col">Acciones</th>
            </tr>
            </thead>
           
<tbody>
    @foreach($empleados as $empleado)
    <tr>
        <td>{{$empleado->id}}</td>
        <td>{{$empleado->codigo}}</td>
        <td>{{$empleado->nombres}}</td>
        <td>{{$empleado->apellidos}}</td>
        <td>{{$empleado->direccion}}</td>
        <td>{{$empleado->telefono}}</td>
        <td>{{$empleado->id_puesto}}</td>
        <td>{{$empleado->fecha_nacimiento}}</td>
        <td>
            <form action ="{{ route ('empleados.destroy',$empleado->id)}}" method="POST">
            <a href="/empleados/{{$empleado->id}}/edit" class="btn btn-success">Modificar</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
        </tr>
    @endforeach
</tbody>
</table> 

@endsection