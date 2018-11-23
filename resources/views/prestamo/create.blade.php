@extends('master')
@section('content')
<div class="container">
 <form method="post" action="{{action('prestamoController@store')}}">
 <div class="form-group row">

 {{csrf_field()}}
 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Id del Libro</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="id_libro">
 </div>

  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Id del Estudiante</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="id_estudiante">
 </div>

 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Id del Empleado</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="id_empleado">
 </div>

 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Fecha de Prestamo</label>
 <div class="col-sm-10">
 <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" name="fecha_prestamo">
 </div>

 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Fecha de Entrega</label>
 <div class="col-sm-10">
 <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" name="fecha_entrega">
 </div>

 <br>
 <br>
 <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Crear</button>
    </div>
 </form>
</div>
@endsection