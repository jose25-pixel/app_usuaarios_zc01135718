<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*$this->WithoutExceptionHandling();*/
Route::get('/usuarios','UserController@index');



Route::get('/', function () {
    return view('welcome');
});


/*Route::get('/usuarios', function(){
    return "Usuarios Registrados";

});*/

//imprime  el mensaje usuarios/nuevo se pone en el navegador
/*Route::get('/usuarios/nuevo', function (){
    return "Crear nuevo usuario";
});*/
Route::get('/usuarios/nuevo', 'UserController@create');
//imprime  el mensaje usuarios/i pones un numero se pone en el navegador

/*Route::get('/usuarios/{id}', function ($id){
    return "Mostrando detalle del usuario:{$id}";
})->where('id','[0-9]+');*/
Route::get('/usuarios/{id}', 'UserController@show')->where('id','[0-9]+');


//imprime  el mensaje saludo/nombre opcional/apodo opcional se pone en el navegador
Route::get('/saludo/{nombre}/{apodo?}',function($nombre,$apodo = null){
     if($apodo){
        return "Bienvenido {$nombre}, tu apodo es {$apodo}";
     }
     else{
        return "Bienvenido {$nombre}, no tienes apodo";
     }
});