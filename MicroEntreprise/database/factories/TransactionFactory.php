<?php

namespace Database\Factories;

use App\Models\Mission;
use App\Models\Transaction;
use App\Models\Contribution;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $sourceType = $this->faker->randomElement(['\App\Models\Mission', '\App\Models\Contribution']);
      $sourceId = $sourceType == "\App\Models\Mission" ? \App\Models\Mission::inRandomOrder()->first()->id
      : \App\Models\Contribution::inRandomOrder()->first()->id;
        return [
          'source_type' => $sourceType,
          'source_id' => $sourceId,
          'price' => $this->faker->numberBetween($min = 100, $max = 400)
        ];
    }
}
