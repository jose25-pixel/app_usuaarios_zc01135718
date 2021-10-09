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
       // return "Crear nuevo usuario";
        $user = new User();
          return view('users.crear',compact('user'));
        //return view('users.crear');
    }

    public function store(){
   $data= request()->validate([
      'name' => 'required',
      'email' =>['required','email','unique:users,email'],
      'password'=>'required'],
      ['name.required'=>'El campo nombre es obligatorio',
      'email.required'=>'El campo email es obligatorio',
      'password.required'=>'El campo password es obligatorio'
  ]

   );
///arriba en el metodo store Request $request
/*$data = Request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'

]);*/
/*if(empty($data['name'])){
    return redirect('/usuarios/nuevo')->withErrors([
     'name'=>'El campo nombre es obligatorio'
     ]);
}*/
   User::create([
       'name'=> $data['name'],
       'email'=> $data['email'],
       'password'=> bcrypt($data['password'])
   ]);
   return redirect('/usuarios/');
        //return 'Procesando Informacion';
   //User::create($data);

        return redirect('/usuarios/');
    }

}
