<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){


        if (request()->has('empty')){
             $users=[];
        }else{
        /*return 'Usuarios Registrados';*/

        $users =[
            'jorje coto',
            'luis Perez',
            'Carlos Osorio',
            'Mauricio Lopez',
            'Pedro Santiago',
             ];
              }

               $titulo ='Usuarios Registrados';

        return view('users.index',
        ['users' => $users,
         'title'=> $titulo]);
          /*dd(compact('title','users'));*/
       // return view('users.users', compact('title','users'));
    }
    public function show($id){
        return view('users.users-show',compact('id'));
       // return"Mostrando detalle del usuario: {$id}";

    }

    public function create(){
        return "Crear nuevo usuario";
    }
}
