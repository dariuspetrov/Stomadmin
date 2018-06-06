<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReferenceLetterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('refference_letters')->insert([
            'doctor_id' => 3,
            'pacient_id' => 7,
            'intervention_id' => 2,
            'unit_id' => 2,
            'diagnostic' => 'Gingivită acută',
            'medicine' => 'Algocalmin',
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
