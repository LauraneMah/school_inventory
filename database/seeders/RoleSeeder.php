<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ROLES = ['normal', 'admin'];
        foreach ($ROLES as $ROLE) {
            Role::firstOrCreate([
                'name' => $ROLE
            ]);
        }
    }
}
