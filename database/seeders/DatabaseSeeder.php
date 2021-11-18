<?php

namespace Database\Seeders;

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
         $this->call([
        UserSeeder::class,
        ClassSeeder::class,
        CountrySeeder::class,
       
    ]);
        
         //\App\Models\Classes::factory(10)->create();
    }
}
