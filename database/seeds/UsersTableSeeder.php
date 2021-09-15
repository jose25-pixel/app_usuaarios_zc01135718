<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   /* DB::statement('SET FOREIGN_KEY_CHECKS =0');
     DB::table('users')->truncate();
     DB::statement('SET FOREIGN_KEY_CHECKS =1');*/
     //codigo para hacer un select a otra tabla referenciada
  //   $profesiones = DB::select('SELECT  id FROM profession WHERE title ="desarollador Bank.end"');
  // dd($profesiones[0]->id);
     //consulta utilizando el construtor de laravel
  /******+++++otra forma de costrutor sql de laravel++++++++++++*/
   $profesiones= DB::table('profession')->select('id')->take(2)->get();
   // dd($profesiones);
        DB::table('users')->insert([
         'name'=> 'Rodolfo',
         'email'=> 'joseRodolfo@gmail.com',
         'profession_id'=> $profesiones[0]->id,//le pasamos la varaible de la consulta
         'password'=> bcrypt('12347')
        ]);
        DB::table('users')->insert([
         'name'=> 'Juana',
         'email'=> 'juanaguadalupe@gmail.com',
         'profession_id'=> '9',
         'password'=> bcrypt('888883')
        ]);
         DB::table('users')->insert([
         'name'=> 'Leonel',
         'email'=> 'leonel@gmail.com',
         'profession_id'=> '8',
         'password'=> bcrypt('1234casa7')
        ]);
          DB::table('users')->insert([
         'name'=> 'Carlos',
         'email'=> 'carlos@gmail.com',
         'profession_id'=> '7',
         'password'=> bcrypt('12347_ff')

        ]);
        DB::table('users')->insert([
         'name'=> 'Alberto',
         'email'=> 'alberto@gmail.com',
         'profession_id'=> '6',
         'password'=> '1234maravilla7'
        ]);
        DB::table('users')->insert([
         'name'=> 'Ursula',
         'email'=> 'Ursula@gmail.com',
         'profession_id'=> '5',
         'password'=> '123bb47'
        ]);
        DB::table('users')->insert([
         'name'=> 'Enrique',
         'email'=> 'enrique@gmail.com',
         'profession_id'=> '4',
         'password'=> '1234lll7'
        ]);
        DB::table('users')->insert([
         'name'=> 'Mauricio',
         'email'=> 'mauricio@gmail.com',
         'profession_id'=> '3',
         'password'=> 'unamaravilla2'
        ]);
        DB::table('users')->insert([
         'name'=> 'Patricia',
         'email'=> 'patricia@gmail.com',
         'profession_id'=> '2',
         'password'=> '12347patricia'
        ]);
        DB::table('users')->insert([
         'name'=> 'Manuel',
         'email'=> 'manuel@gmail.com',
         'profession_id'=> '1',
         'password'=> '1234nbv7'
        ]);
    }
}
