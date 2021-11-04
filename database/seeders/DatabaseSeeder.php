<?php

namespace Database\Seeders;
use Database\Factories\DistrictFactory;

use Illuminate\Database\Seeder;
use Database\Seeders\DistrictSeeder;
use Database\Seeders\GuardianSeeder;
use App\Models\District;
use App\Models\Guardian;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        District::factory(15)->create();
        Guardian::factory(100)->create();
    }
}
