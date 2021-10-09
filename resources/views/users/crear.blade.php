 <!--   -->
 {{-- @include('header') --}}
 @extends('layout')
 @section('title',"Crear nuevo usuario")

 @section('content')
 <br>

<h1>Crear nuevo usuario</h1>
@if($errors->any())
<div class="alert alert-danger">
  <h6> Por favor corrige los errores</h6>
   <ul>
    @foreach ($errors->all() as $error)
     <li> {{$error}} </li>
    @endforeach

   </ul>

</div>
@endif


         <form action="{{url('/usuarios/crear') }}" method="POST" >

          {!! csrf_field() !!}

            <div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text"  name="name" class="form-control-plaintext" id="name" placeholder="Ingrese Nombre"  value="{{ old('name')}}">
      @if($errors->has('name'))
      <p> {{$errors->first('name')}} </p>
      @endif
    </div>
           <div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email"  class="form-control" name="email" id="email" placeholder="Ingrese Correo" value="{{ old('email')}}">
       @if($errors->has('email'))
      <p> {{$errors->first('email')}} </p>
      @endif
    </div>
  </div>
  <div class="mb-3 row">
    <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="mayor a seix caracteres"  value="{{ old('password')}}">
       @if($errors->has('password'))
      <p> {{$errors->first('password')}} </p>
      @endif
    </div>
  </div>


      {{-- /////////////////////////////////////////////////////////--}}

        {{-- /////////////////////////////////////////////////////////--}}


        {{-- /////////////////////////////////////////////////////////--}}



         <div class="tile-footer">
            <button class="btn btn-primary" type="submit">Crear Usuario</button>
          </div>
        </form>






 {{--  @include('footer') --}}
 @endsection