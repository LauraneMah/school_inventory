<?php

namespace Database\Seeders;
use App\Models\Role;
use Faker\Factory;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
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
            DB::table ('people')->insert([
                'name' => $faker->lastName(),
                'first_name' => $faker->firstName(),
                'username' => $faker->username(),
                'password' => $faker->password(),
                'role_id' => Role::all()->random()->id,
            ]);
        }
    }
}
