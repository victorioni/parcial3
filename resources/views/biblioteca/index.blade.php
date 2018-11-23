@extends('master')
@section('content')
<div class="container">
    <h1>Gestion De La Biblioteca</h1>
    <div class="">
     <a href="{{action('librosController@index')}}" class="btn btn-success">Gestionar y Buscar Libros</a>
     <br>
     <br>
     <a href="{{action('estudiantesController@index')}}" class="btn btn-success">Gestionar Estudiantres</a>
     <br>
     <br>
     <a href="{{action('empleadosController@index')}}" class="btn btn-success">Gestionar Empleados</a>
     <br>
     <br>
     <a href="{{action('prestamoController@index')}}" class="btn btn-success">Gestionar Prestamos</a>
     <br>
     <br>
 </div>
</div>
@endsection