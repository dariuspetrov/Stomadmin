<?php

use Illuminate\Database\Seeder;

class InterventionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interventions')->insert([
            'pacient_id' => '8',
            'intervention_type' => '1'
        ]);
		
		DB::table('interventions')->insert([
            'pacient_id' => '8',
            'intervention_type' => '3'
        ]);
		
		DB::table('interventions')->insert([
            'pacient_id' => '9',
            'intervention_type' => '2'
        ]);
		
		DB::table('interventions')->insert([
            'pacient_id' => '9',
            'intervention_type' => '4'
        ]);
		
		DB::table('interventions')->insert([
            'pacient_id' => '9',
            'intervention_type' => '9'
        ]);
		
		DB::table('interventions')->insert([
            'pacient_id' => '10',
            'intervention_type' => '5'
        ]);
		
		DB::table('interventions')->insert([
            'pacient_id' => '10',
            'intervention_type' => '7'
        ]);
		
		DB::table('interventions')->insert([
            'pacient_id' => '11',
            'intervention_type' => '6'
        ]);
		
		DB::table('interventions')->insert([
            'pacient_id' => '11',
            'intervention_type' => '8'
        ]);
    }
}
