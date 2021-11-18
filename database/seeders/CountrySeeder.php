<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $countries = [
            ['name' => 'Afghanistan'],
            ['name' => 'Åland Islands'],
            ['name' => 'Albania'],
            ['name' => 'Algeria'],
            ['name' => 'American Samoa'],
            ['name' => 'Andorra'],
            ['name' => 'Angola'],
            ['name' => 'Anguilla'],
            ['name' => 'Antarctica'],
            ['name' => 'Antigua and Barbuda'],
            ['name' => 'Argentina'],
            ['name' => 'Armenia'],
            ['name' => 'Aruba'],
            ['name' => 'Australia'],
            ['name' => 'Austria'],
           
        ];
       \App\Models\Countries::insert($countries);
    }
}
