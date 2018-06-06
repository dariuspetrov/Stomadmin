<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ConsultPapersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consult_papers')->insert([
            'paper_id' => 1,
            'doctor_id' => 4,
            'pacient_id' => 7,
            'diagnostic_id' => 4,
            'medicine' => 'Algocalmin',
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('consult_papers')->insert([
            'paper_id' => 2,
            'doctor_id' => 5,
            'pacient_id' => 10,
            'diagnostic_id' => 5,
            'medicine' => 'Dentolax',
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
