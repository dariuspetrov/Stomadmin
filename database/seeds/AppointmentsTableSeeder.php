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
            'pacient_id' => 7,
            'doctor_id' => 3,
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
            'cancelled' => 0
        ]);
		
		DB::table('appointments')->insert([
            'pacient_id' => 8,
            'doctor_id' => 3,
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
            'cancelled' => 0
        ]);
		
		DB::table('appointments')->insert([
            'pacient_id' => 9,
            'doctor_id' => 4,
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
            'cancelled' => 0
        ]);
		
		DB::table('appointments')->insert([
            'pacient_id' => 10,
            'doctor_id' => 5,
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
            'cancelled' => 0
        ]);
		
		DB::table('appointments')->insert([
            'pacient_id' => 11,
            'doctor_id' => 5,
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
            'cancelled' => 0
        ]);
    }
}
