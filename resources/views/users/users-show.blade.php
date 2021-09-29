

  {{-- @include('header') --}}
  @extends('layout')
  @section('content')
  @section('title',"Usuarios {$user->id}")
  
  <br>
  <br>
  <h1>Usuario #  {{$user->id}} </h1>
  
  
  Mostrando detalle del usuario: {{$user->id}}

<a href=" {{url()->previous()}} " title="">Regresar </a>
    <table class="table table-striped col-12 ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>@mdo</td>
    </tr>


  </tbody>
</table>
  {{--  @include('footer') --}}
  @endsection