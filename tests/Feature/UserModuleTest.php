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
}
