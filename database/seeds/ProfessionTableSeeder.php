<?php

use Illuminate\Database\Seeder;

class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profession')->insert([
         'title'=> 'programador'
        ]);
         DB::table('profession')->insert([
         'title'=> 'diseñador 3'
        ]);
    DB::table('profession')->insert([
         'title'=> 'Arquitecto'
        ]);
    DB::table('profession')->insert([
         'title'=> 'Abogado'
        ]);
    DB::table('profession')->insert([
         'title'=> 'Administrador base datos'
        ]);
    DB::table('profession')->insert([
         'title'=> 'diseñador web'
        ]);
    DB::table('profession')->insert([
         'title'=> 'programador en c'
        ]);
    DB::table('profession')->insert([
         'title'=> 'diseñador 2'
        ]);
     DB::table('profession')->insert([
         'title'=> 'Sistemas Operativos'
        ]);
         DB::table('profession')->insert([
         'title'=> 'diseñador'
        ]);
    }
}
