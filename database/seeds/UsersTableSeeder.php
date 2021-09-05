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
        DB::table('users')->insert([
         'name'=> 'Rodolfo',
         'email'=> 'joseRodolfo@gmail.com',
         'profession_id'=> '10',
         'password'=> '12347'
        ]);
        DB::table('users')->insert([
         'name'=> 'Juana',


         'email'=> 'juanaguadalupe@gmail.com',
         'profession_id'=> '9',
         'password'=> '888883'
        ]);
         DB::table('users')->insert([
         'name'=> 'Leonel',
         'email'=> 'leonel@gmail.com',
         'profession_id'=> '8',
         'password'=> '1234casa7'
        ]);
          DB::table('users')->insert([
         'name'=> 'Carlos',
         'email'=> 'carlos@gmail.com',
         'profession_id'=> '7',
         'password'=> '12347_ff'
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
