@extends('layouts.plantillabase');

@section('contenido')

<h2>EDITAR EMPLEADO</h2>

<form action="/empleados/{{$empleado->id}}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">

          <label for="lbl_id" class="form-label"><b>id</b></label>
          <input type="text" name="txt_id" id="txt_id" class="form-control" placeholder="id" value="{{$empleado->id}}"> 
          </div>
    
          <div class="mb-3">
          <label for="lbl_codigo" class="form-label"><b>Codigo</b></label>
          <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" placeholder="E001" value="{{$empleado->codigo}}"> 
          </div>

          <div class="mb-3">
          <label for="lbl_nombre" class="form-label"><b>Nombres</b></label>
          <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" placeholder="Nombre 1 Nombre 2 " value="{{$empleado->nombres}}">
          </div>

          <div class="mb-3">
          <label for="lbl_apellido" class="form-label"><b>Apellidos</b></label>
          <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" placeholder="Apellido 1 Apellido 2 " value="{{$empleado->apellidos}}">
          </div>

          <div class="mb-3">
          <label for="lbl_direccion" class="form-label"><b>Direccion</b></label>
          <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="#casa calle avenida lugar location " value="{{$empleado->direccion}}">
          </div>

          <div class="mb-3">
          <label for="lbl_telefono" class="form-label"><b>Telefono</b></label>
          <input type="text" name="txt_telefono" id="txt_telefono" class="form-control" placeholder="58565452" value="{{$empleado->telefono}}">
          </div>

          <div class="mb-3">
          <label for="lbl_puesto" class="form-label"><b>Puesto</b></label>
          <input type="text" name="txt_puesto" id="txt_puesto" class="form-control" placeholder="1=Jefe 2=Programador 3=Desarrolador 4=Analista 5=Secretaria" value="{{$empleado->id_puesto}}">
          </div>

          <div class="mb-3">
          <label for="lbl_fn" class="form-label"><b>Fecha de Nacimiento</b></label>
          <input type="date" name="txt_fn" id="txt_fn" class="form-control" placeholder="YYYY-MM-DD" value="{{$empleado->fecha_nacimiento}}">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_guardar" id="btn_guardar" class="btn btn-outline-success" value="Guardar">
          <a href="/empleados"  class="btn btn-outline-danger" tabindex="1">CANCELAR</a>
          </div>
</form>
@endsection