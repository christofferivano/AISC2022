<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use database\Seeders\UserSeeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	foreach (range(1,500) as $index) {
            DB::table('volregis')->insert([
                'full_name' => $faker->full_name,
                'institution' => $faker->institution,
                'major' => $faker->major,
                'batch' => $faker->batch,
                'domicile' => $faker->domicile,
                'email' => $faker->email,
                'phone_number' => $faker->phone_number,
                'line_id' => $faker->line_id,
                'position_1' => $faker->position_1,
                'position_2' => $faker->position_2,
                'twibbon_link' => $faker->twibbon_link,
                'proof_link' => $faker->proof_link
            ]);
        }
    }
}
