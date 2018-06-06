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

        DB::table('refference_letters')->insert([
            'doctor_id' => 3,
            'pacient_id' => 9,
            'intervention_id' => 3,
            'unit_id' => 1,
            'diagnostic' => 'Carie profunda canal',
            'medicine' => 'Devaroscofol',
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('refference_letters')->insert([
            'doctor_id' => 4,
            'pacient_id' => 10,
            'intervention_id' => 1,
            'unit_id' => 2,
            'diagnostic' => 'Infecție rădăcină',
            'medicine' => 'Ampicilină',
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('refference_letters')->insert([
            'doctor_id' => 2,
            'pacient_id' => 6,
            'intervention_id' => 3,
            'unit_id' => 2,
            'diagnostic' => 'Fractură premolar stâng',
            'medicine' => 'Aglicol',
            'date' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
