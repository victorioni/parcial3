@extends('master')
@section('content')
<div class="container">
    <h1>Libros</h1>
    <a href="{{action('librosController@create')}}" class="btn btn-success">Crear</a>
    <a href="{{redirect('.libro.show')}}" class="btn btn-success">Buscar</a>
    <br>
    <br>
    <table class="table table-striped">
    <thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Editorial</th>
    <th>Año</th>
    <th>Ubicacion</th>
    <th>Autor</th>
    <th>Tipo</th>
    <th>Area</th>
    <th>Prestamo</th>
    <th></th>
    <th></th>
     <th></th>
     </tr>
     </thead>
     <tbody>
     @foreach($libro as $post)
     <tr>
    <td>{{$post['id']}}</td>
    <td>{{$post['nombre']}}</td>
    <td>{{$post['ano']}}</td>
    <td>{{$post['ubicacion']}}</td>
    <td>{{$post['autor']}}</td>
    <td>{{$post['tipo']}}</td>
    <td>{{$post['area_de_conocimiento']}}</td>
    <td>{{$post['dias_de_prestamo']}}</td>
    <td><a href="{{action('librosController@edit',$post['id'])}}" class="btn btn-primary">Editar</a></td>
     </tr>
    @endforeach
    </tbody>
    </table>
    <br>
    <br>
</div>