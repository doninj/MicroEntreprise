<?php

namespace Database\Factories;

use App\Models\MissionLine;
use Illuminate\Database\Eloquent\Factories\Factory;

class MissionLineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MissionLine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'mission_id' => \App\Models\Mission::inRandomOrder()->first()->id,
            'title' => $this->faker->text($maxNbChars = 200),
            'quantity' => $this->faker->numberBetween($min = 1, $max = 10),
            'price' => $this->faker->numberBetween($min = 100, $max = 400),
            'unity' =>$this->faker->name(),
        ];
    }
}
