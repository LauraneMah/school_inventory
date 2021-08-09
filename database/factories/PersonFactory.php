<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'first_name' => $this->faker->firstName(),
            'email' => $this->faker->unique()->email(),
            'password' => $this->faker->password(), // password
            'role_id' =>$this->faker->randomElement(['1', '2']),
        ];
    }
}
