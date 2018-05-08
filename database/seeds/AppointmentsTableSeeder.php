<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->insert([
            'pacient_id' => 4,
            'doctor_id' => 2,
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
            'cancelled' => 0
        ]);
    }
}
