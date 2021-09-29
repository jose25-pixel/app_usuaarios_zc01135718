 <!--   -->
 {{-- @include('header') --}}
 @extends('layout')
 @section('title',"Informe de Usuarios")
  
 @section('content')
     
<h1> {{$title}} </h1>
<hr>

@if(!empty($users))
    <ul>
        @foreach($users as $user)
            <li>{{$user->name}},{{$user->email}}
         <a href=" {{url("/usuarios/{$user->id}")}} " title=""> Ver Usuario</a>
              </li>
        @endforeach
      </ul>
  @else
  <p>no hay usuarios registrados</p>
  @endif
 {{--  @include('footer') --}}
 @endsection