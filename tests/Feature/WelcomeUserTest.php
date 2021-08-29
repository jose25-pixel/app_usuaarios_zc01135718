<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{

    /** @test void*/
 function  bienvenido_user_no_nickname(){
     $this->get('/saludo/jorge')
     ->assertStatus(200)
     ->assertSee('Bienvenido jorge, no tienes apodo');
 }

    /** @test void*/
 function  bienvenido_user_nickname(){
     $this->get('/saludo/jorge/coto')
     ->assertStatus(200)
     ->assertSee('Bienvenido jorge, tu apodo es coto');
 }


}
