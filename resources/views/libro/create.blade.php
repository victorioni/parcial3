@extends('master')
@section('content')
<div class="container">
 <form method="post" action="{{action('librosController@store')}}">
 <div class="form-group row">

 {{csrf_field()}}
 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="nombre">
 </div>

  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Editorial</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="editorial">
 </div>

 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Año</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="ano">
 </div>

 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Ubicacion</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="ubicacion">
 </div>

 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Autor</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="autor">
 </div>

 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Tipo</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="tipo">
 </div>

 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Area De Conocimiento</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="area_de_conocimiento">
 </div>

 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Dias de Prestamo</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="dias_de_prestamo">
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