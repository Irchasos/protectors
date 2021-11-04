<?php

namespace Database\Seeders;
use Database\Factories\DistrictFactory;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table("districts")->insert([
            "name" => $faker->name(),

        ]);
    }
}
