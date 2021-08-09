<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('fr_BE');
       for ($i = 0; $i < 20; $i++) {
           DB::table ('rooms')->insert([
               'name' => $faker->lastName(),
               'number' => $faker->unique()->randomNumber(3),
           ]);
       }
    }
}
