<?php

namespace Database\Seeders;

use App\Models\Mission;
use App\Models\Organisation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //\App\Models\Organisation::factory(10)->create();
        //\App\Models\Mission::factory(10)->create();
        //\App\Models\MissionLine::factory(5)->create();

        \App\Models\Organisation::factory(2)->create()->each(function ($organisation) {
          \App\Models\Transaction::factory(2)->create();
          $mission = \App\Models\Mission::factory(2)->make();
          $contribution = \App\Models\Contribution::factory(2)->make();
          $organisation->mission()->saveMany($mission);
          $organisation->contribution()->saveMany($contribution);

        });

        //\App\Models\Organisation::factory(2)->has(\App\Models\Mission::factory(2)->has(\App\Models\MissionLine::factory(2)))->create();
    }
}
