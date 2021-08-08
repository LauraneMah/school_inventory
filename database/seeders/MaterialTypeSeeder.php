<?php

namespace Database\Seeders;
use App\Models\MaterialType;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class MaterialTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $TYPES = ['informatic', 'furniture'];
        foreach ($TYPES as $TYPE) {
            MaterialType::firstOrCreate([
                'name' => $TYPE
            ]);
        }
    }
}
