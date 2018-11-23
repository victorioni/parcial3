@extends('master')
@section('content')
<div class="container">
 <form method="post" action="{{action('estudiantesController@store')}}">
 <div class="form-group row">

 {{csrf_field()}}
 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="nombre">
 </div>

  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">CI</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="numero_de_cedula">
 </div>

 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Carrera</label>
 <div class="col-sm-10">
 <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="carrera">
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