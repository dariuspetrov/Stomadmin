<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReferralsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referrals')->insert([
            'pacient_id' => 7,
            'doctor_id' => 3,
            'unit_id' => 2,
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('referrals')->insert([
            'pacient_id' => 9,
            'doctor_id' => 4,
            'unit_id' => 1,
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
