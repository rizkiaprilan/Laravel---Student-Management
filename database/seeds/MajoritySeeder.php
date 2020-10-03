<?php

use Illuminate\Database\Seeder;
use Faker\factory as Faker;
class MajoritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['faculty_id'=>1,'name' => 'Computer Science'],
            ['faculty_id'=>1,'name' => 'Information System'],
            ['faculty_id'=>2, 'name' => 'Pharmacy'],
            ['faculty_id'=>3, 'name' => 'Psychology'],
            ['faculty_id'=>4, 'name' => 'Medical Science'],
            ['faculty_id'=>5, 'name' => 'Dentistry'],

        ];
        $faker = Faker::create();
        foreach($data as $d){
            DB::table('majorities')->insert([
                'name' => $d['name'],
                'faculty_id' => $d['faculty_id'],
                'description' => $faker->sentence,
            ]);
        }
    }
}
