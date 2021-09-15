<?php

use Illuminate\Database\Seeder;
//use App\Profession;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //funciona de esta manera  lo de estar ejecutando seeders
/* probar de esta manera
     DB::statement('SET FOREIGN_KEY_CHECKS =0');
     DB::table('users')->truncate();
    DB::table('profession')->truncate();
     DB::statement('SET FOREIGN_KEY_CHECKS =1');
     */
//codigo para borrar las tablas
     DB::statement('SET FOREIGN_KEY_CHECKS =0');
     DB::table('users')->truncate();
     DB::statement('SET FOREIGN_KEY_CHECKS =1');

     DB::statement('SET FOREIGN_KEY_CHECKS =0');
     DB::table('profession')->truncate();
     DB::statement('SET FOREIGN_KEY_CHECKS =1');

         $this->call(ProfessionTableSeeder::class);
         $this->call(UsersTableSeeder::class);

    }
}
