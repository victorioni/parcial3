@extends('master')
@section('content')
<div class="container">
    <h1>Estudiante</h1>
    <a href="{{action('estudiantesController@create')}}" class="btn btn-success">Crear</a>
    <br>
    <br>
    <table class="table table-striped">
    <thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>CI</th>
    <th>Carrera</th>
    <th></th>
    <th></th>
     <th></th>
     </tr>
     </thead>
     <tbody>
     @foreach($estudiante as $post)
     <tr>
    <td>{{$post['id']}}</td>
    <td>{{$post['nombre']}}</td>
    <td>{{$post['numero_de_cedula']}}</td>
    <td>{{$post['carrera']}}</td>
    <td><a href="{{action('estudiantesController@edit',$post['id'])}}" class="btn btn-primary">Editar</a></td>
     </tr>
    @endforeach
    </tbody>
    </table>
    <br>
    <br>
</div>