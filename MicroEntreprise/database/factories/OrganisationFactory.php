<?php

namespace Database\Factories;

use App\Models\Organisation;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganisationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organisation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'slug' => $this->faker->name(),
                'name' => $this->faker->name(),
                'email'=> $this->faker->unique()->safeEmail(),
                'address' => $this->faker->address(),
                'type' => $this->faker->randomElement($array = array ('school','client','government')),
        ];
    }
}
