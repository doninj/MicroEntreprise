<?php

namespace Database\Factories;

use App\Models\Contribution;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContributionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contribution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'price' => $this->faker->numberBetween($min = 100, $max = 400),
          'title' => $this->faker->text($maxNbChars = 200),
          'comment' =>$this->faker->text($maxNbChars = 200),
          //'organisation_id' =>  \App\Models\Organisation::inRandomOrder()->first()->id,
        ];
    }
}
