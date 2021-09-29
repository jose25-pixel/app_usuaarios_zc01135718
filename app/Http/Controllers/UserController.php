<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
class UserController extends Controller
{
    public function index(){


        /*if (request()->has('empty')){
             $users=[];
        }else{*/
        /*return 'Usuarios Registrados';*/

     /*   $users =[
            'jorje coto',
            'luis Perez',
            'Carlos Osorio',
            'Mauricio Lopez',
            'Pedro Santiago',
             ];
              }*/
//$users=DB::table('users')->get(); por el facede de db
$users=User::all();
//dd($users);

               $titulo ='Usuarios Registrados';

        return view('users.index',
        ['users' => $users,
         'title'=> $titulo]);
          /*dd(compact('title','users'));*/
       // return view('users.users', compact('title','users'));
    }
    public function show($id){
        $user=User::findOrFail($id);
       // dd($user);
        /*if ($user == null) {
   //return view('errors.404');
   return response()->view('errors.404',[],404);
        }*/
        return view('users.users-show',compact('user'));
       // return"Mostrando detalle del usuario: {$id}";

    }

    public function create(){
        return "Crear nuevo usuario";
    }
}
