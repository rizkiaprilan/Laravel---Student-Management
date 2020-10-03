<?php

use Illuminate\Database\Seeder;
use Faker\factory as Faker;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            ['name'=>'Computer Science'],
            ['name'=>'Pharmacy'],
            ['name'=>'Psychology'],
            ['name'=>'Medicine'],
            ['name'=>'Dentistry'],

        ];
        $faker = Faker::create();
        foreach($data as $d){
            DB::table('faculties')->insert([
                'name' => $d['name'],
                'description' => $faker->sentence,
            ]);
        }
    }
}
