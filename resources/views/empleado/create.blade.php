@extends('layouts.plantillabase');

@section('contenido')
<h2>Agregar Empleado</h2>

<form action="/empleados" method="POST">
@csrf

<div class="mb-3">
          <label for="lbl_codigo" class="form-label"><b>Codigo</b></label>
          <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" placeholder="E001">
          </div>

          <div class="mb-3">
          <label for="lbl_nombre" class="form-label"><b>Nombres</b></label>
          <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" placeholder="Nombre 1 Nombre 2 ">
          </div>

          <div class="mb-3">
          <label for="lbl_apellido" class="form-label"><b>Apellidos</b></label>
          <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" placeholder="Apellido 1 Apellido 2 ">
          </div>

          <div class="mb-3">
          <label for="lbl_direccion" class="form-label"><b>Direccion</b></label>
          <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="Zona Calle Avenida Edificio ">
          </div>

          <div class="mb-3">
          <label for="lbl_telefono" class="form-label"><b>Telefono</b></label>
          <input type="text" name="txt_telefono" id="txt_telefono" class="form-control" placeholder="58565452">
          </div>

          <div class="mb-3">
          <label for="lbl_puesto" class="form-label"><b>Puesto</b></label>
          <input type="text" name="txt_puesto" id="txt_puesto" class="form-control" placeholder="1=Jefe 2=Programador 3=Desarrolador 4=Analista 5=Secretaria">
          </div>

          <div class="mb-3">
          <label for="lbl_fn" class="form-label"><b>Fecha de Nacimiento</b></label>
          <input type="date" name="txt_fn" id="txt_fn" class="form-control" placeholder="YYYY-MM-DD">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-outline-success" value="Agregar">
          <a href="/empleados"  class="btn btn-outline-danger" tabindex="1">CANCELAR</a>
          </div>
</form>
@endsection