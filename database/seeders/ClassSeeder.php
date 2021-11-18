<?php

namespace Database\Seeders;
use App\Models\Classes;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $classes = [
            ['class_name' => 'C'],
            ['class_name' => 'D'],
            ['class_name' => 'E'],
            ['class_name' => 'F'],
            ['class_name' => 'G'],
            ['class_name' => 'H'],
            ['class_name' => 'I'],
            ['class_name' => 'J'],
            ['class_name' => 'K'],
            ['class_name' => 'L'],
            ['class_name' => 'M'],
            ['class_name' => 'N'],
            ['class_name' => 'O'],
            ['class_name' => 'P'],
            ['class_name' => 'Q'],
           
        ];
       \App\Models\Classes::insert($classes);
    }
}
