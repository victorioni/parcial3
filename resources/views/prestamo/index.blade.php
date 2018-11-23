@extends('master')
@section('content')
<div class="container">
    <h1>Libros</h1>
    <a href="{{action('prestamoController@create')}}" class="btn btn-success">Crear</a>
    <br>
    <br>
    <table class="table table-striped">
    <thead>
    <tr>
    <th>ID</th>
    <th>ID libro</th>
    <th>ID estudiante</th>
    <th>Prestamo</th>
    <th>Entrega</th>
    <th></th>
    <th></th>
     <th></th>
     </tr>
     </thead>
     <tbody>
     @foreach($prestamo as $post)
     <tr>
    <td>{{$post['id']}}</td>
    <td>{{$post['id_libro']}}</td>
    <td>{{$post['id_estudiante']}}</td>
    <td>{{$post['id_empleado']}}</td>
    <td>{{$post['fecha_prestamo']}}</td>
    <td>{{$post['fecha_entrega']}}</td>
     </tr>
    @endforeach
    </tbody>
    </table>
    <br>
    <br>
</div>