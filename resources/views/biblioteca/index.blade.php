@extends('master')
@section('content')
<div class="container">
    <h1>Gestion De La Biblioteca</h1>
    <div class="">
     <a href="{{action('librosController@create')}}" class="btn btn-success">Agregar nuevo</a>
 </div>
</div>
@endsection