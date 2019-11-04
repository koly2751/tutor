<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
         $this->call(AreasTableSeeder::class);
          $this->call(SubjectsTableSeeder::class);
          $this->call(StudentclassesTableSeeder::class);
           $this->call(DistrictsTableSeeder::class);
           $this->call(TutorsTableSeeder::class);
           $this->call(GuardiansTableSeeder::class);
    }
}
