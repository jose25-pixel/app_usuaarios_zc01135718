<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test*/
 function cargar_lista_usuario(){
    $this->get('/usuarios')
    ->assertStatus(200)
    ->assertSee('Usuarios Registrados');
    }
/** @test*/
function crear_nuevo_usuario(){
    $this->get('/usuarios/nuevo')
    ->assertStatus(200)
    ->assertSee('Crear nuevo usuario');
}
/** @test**/
function cargar_detalle_usuario(){
    $this->get('/usuarios/5')
    ->assertStatus(200)
    ->assertSee('Mostrando detalle del usuario');

}
/** @test**/
function error_404(){
    $this->get('/usuarios/100')
    ->assertStatus(404)
    ->assertSee('Usuario no encontrado');
}
        /** @test**/
        function test_nuevo_usuario(){
            $this->post('/usuarios/',
                [
              'name'=>'Juana',
             'email'=>'juanaguadalupe@gmail.com',
             'password'=>'12345678'])
            ->assertSee('Procesando Informacion');

     $this->assertDatabaseHas('users',[
            'name'=>'Juana',
             'email'=>'josecrus@gmail.com',
             'password'=>'12345678']);

          $this->assertCredentials([
           'name'=>'Juana',
             'email'=>'juanaguadalupe@gmail.com',
             'password'=>'12345678']);

        }


        /** @test**/
function elcampo_nombre_requerido(){
    //$this->withoutExceptionHandling();
    $this->from('usuarios/nuevo')->post('/usuarios/',[
             'name'=>'Juana',
             'email'=>'juanaguadalupe@gmail.com',
             'password'=>'12345678'

           ])->assertRedirect('usuarios/nuevo')->assertSessionHasErrors(['name'=>'El campo nombre es obligatorio']);
     $this->assertDatabaseMissing('users',[

             'email'=>'juanaguadalupe@gmail.com',

           ]);
}

}
