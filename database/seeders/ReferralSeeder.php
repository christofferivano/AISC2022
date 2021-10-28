<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReferralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referall')->insert([
            'referral_code' => "AISCxLOURA",
            'team' => 1,
        ]);

        DB::table('referall')->insert([
            'referral_code' => "AISCxSIFRA",
            'team' => 1,
        ]);

        
    }
}
