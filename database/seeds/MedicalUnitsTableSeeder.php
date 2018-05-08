<?php

use Illuminate\Database\Seeder;

class MedicalUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medical_units')->insert([
            'unit_id' => 1,
            'name' => 'Clinica Ortodontie',
            'address' => 'Popa Șapca Nr. 8',
            'phone' => '+40 732 421 324'
        ]);
    }
}
