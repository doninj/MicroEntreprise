<?php

namespace Database\Factories;

use App\Models\Mission;
use Illuminate\Database\Eloquent\Factories\Factory;

class MissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mission::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->title(),
            //'organisation_id' =>  \App\Models\Organisation::inRandomOrder()->first()->id,
            'title' => $this->faker->text($maxNbChars = 200),
            'comment' =>$this->faker->text($maxNbChars = 200),
            'deposit' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'ended_at' => $this->faker->dateTime($max = 'now', $timezone = null)
        ];
    }
}
