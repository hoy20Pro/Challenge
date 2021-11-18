<?php

namespace Database\Seeders;
use App\Models\Countries;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = [
            ['class_id'=>1,'country_id'=>3,'data_of_birth'=>'1999-10-17','name' => 'Horyua'],
            ['class_id'=>4,'country_id'=>9,'data_of_birth'=>'1994-9-02','name' => 'Honda'],
            ['class_id'=>14,'country_id'=>6,'data_of_birth'=>'2000-7-17','name' => 'Safana'],
            ['class_id'=>15,'country_id'=>10,'data_of_birth'=>'1998-1-20','name' => 'Noorana'],
            ['class_id'=>1,'country_id'=>13,'data_of_birth'=>'1976-03-23','name' => 'Mohand',],
            ['class_id'=>12,'country_id'=>5,'data_of_birth'=>'1970-12-31','name' => 'Nadaan'],
            ['class_id'=>11,'country_id'=>18,'data_of_birth'=>'1980-05-06','name' => 'Khalfanies'],
            ['class_id'=>2,'country_id'=>3,'data_of_birth'=>'1988-04-30','name' => 'Hamdo'],
            ['class_id'=>9,'country_id'=>6,'data_of_birth'=>'2004-02-29','name' => 'warit'],
            ['class_id'=>1,'country_id'=>3,'data_of_birth'=>'1991-08-08','name' => 'Salim'],
            ['class_id'=>10,'country_id'=>6,'data_of_birth'=>'1989-11-09','name' => 'Hamed'],
            ['class_id'=>18,'country_id'=>5,'data_of_birth'=>'1997-09-21','name' => 'Amgad'],
            ['class_id'=>3,'country_id'=>4,'data_of_birth'=>'1993-11-01','name' => 'Urab'],
            ['class_id'=>5,'country_id'=>3,'data_of_birth'=>'1956-04-05','name' => 'Duma'],
            ['class_id'=>1,'country_id'=>8,'data_of_birth'=>'1990-08-09','name' => 'Randa'],
           
        ];
       \App\Models\Students::insert($student);
    }
}
