@extends('master')
@section('content')
<div class="container">
    <h1>Libros</h1>
    <a href="{{action('empleadosController@create')}}" class="btn btn-success">Crear</a>
    <br>
    <br>
    <table class="table table-striped">
    <thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>CI</th>
    <th>Ocupacion</th>
    <th></th>
    <th></th>
     <th></th>
     </tr>
     </thead>
     <tbody>
     @foreach($empleado as $post)
     <tr>
    <td>{{$post['id']}}</td>
    <td>{{$post['nombre']}}</td>
    <td>{{$post['ano']}}</td>
    <td><a href="{{action('empleadosController@edit',$post['id'])}}" class="btn btn-primary">Editar</a></td>
     </tr>
    @endforeach
    </tbody>
    </table>
    <br>
    <br>
</div>