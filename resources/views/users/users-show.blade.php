

  {{-- @include('header') --}}
  @extends('layout')
  @section('content')
  @section('title',"Usuarios {$id}")
  
  <br>
  <br>
  <h1>Usuario #  {{$id}} </h1>
  
  
  Mostrando detalle del usuario: {{$id}}
  {{--  @include('footer') --}}
  @endsection