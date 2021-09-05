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

        $this->call(ProfessionTableSeeder::class);
         $this->call(UsersTableSeeder::class);

    }
}
