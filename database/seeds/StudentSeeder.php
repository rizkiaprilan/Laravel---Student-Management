<?php

use Illuminate\Database\Seeder;
use Faker\factory as Faker;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['majority_id'=>1],
            ['majority_id'=>2],
            ['majority_id'=>3],
            ['majority_id'=>4],
            ['majority_id'=>5],

        ];
        $faker = Faker::create();
        foreach($data as $d){
            DB::table('students')->insert([
                'name' => $faker->name,
                'majority_id' => $d['majority_id'],
                'address' => $faker->address,
            ]);
        }
    }
}
