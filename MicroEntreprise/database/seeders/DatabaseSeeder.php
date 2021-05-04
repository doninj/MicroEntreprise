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
        \App\Models\Contribution::factory(5)->create();
    }
}
