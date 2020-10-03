<?php

use Illuminate\Database\Seeder;
use Faker\factory as Faker;
class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'Nusantara Computer Club'],
            ['name'=>'Nusantara English Club'],
            ['name'=>'Student Learning Community'],
            ['name'=>'Nusantara BVoice Radio'],
            ['name'=>'Binus TV Club'],

        ];
        $faker = Faker::create();
        foreach($data as $d){
            DB::table('clubs')->insert([
                'name' => $d['name'],
                'description' => $faker->sentence,
            ]);
        }
    }
}
