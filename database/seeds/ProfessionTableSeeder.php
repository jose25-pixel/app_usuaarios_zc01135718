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
     /*DB::statement('SET FOREIGN_KEY_CHECKS =0');
     DB::table('profession')->truncate();
     DB::statement('SET FOREIGN_KEY_CHECKS =1');*/


      /*  DB::table('profession')->insert([
         'title'=> 'programador'
        ]);*/
     //DB::insert('INSERT INTO profession(title) VALUES ("desarollador Bank.end")');
        //sentencia sql en laravel para borar registro de la bd
     DB::delete('DELETE FROM profession WHERE  id=9');
     DB::insert('INSERT INTO profession(title) VALUES(?)', ['desarollador Bank.end']);
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
     /*DB::table('profession')->insert([
         'title'=> 'Sistemas Operativos'
        ]);*/

         DB::table('profession')->insert([
         'title'=> 'diseñador'
        ]);
    }
}
