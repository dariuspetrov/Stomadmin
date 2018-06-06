<?php

use Illuminate\Database\Seeder;

class InterventionTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intervention_types')->insert([
            'name' => 'Consultație',
            'price' => '100'
        ]);
		
		DB::table('intervention_types')->insert([
            'name' => 'Detartraj manual per dinte',
            'price' => '10'
        ]);
		
		DB::table('intervention_types')->insert([
            'name' => 'Periaj profesional per arcadă',
            'price' => '50'
        ]);
		
		DB::table('intervention_types')->insert([
            'name' => 'Tratament de albire',
            'price' => '800'
        ]);
		
		DB::table('intervention_types')->insert([
            'name' => 'Controlul plăcii bacteriene',
            'price' => '15'
        ]);
		
		DB::table('intervention_types')->insert([
            'name' => 'Pansament calmant',
            'price' => '50'
        ]);
		
		DB::table('intervention_types')->insert([
            'name' => 'Drenaj endodontic',
            'price' => '50'
        ]);
		
		DB::table('intervention_types')->insert([
            'name' => 'Tratament cu antibiotic 3 ședințe per dinte',
            'price' => '45'
        ]);
		
		DB::table('intervention_types')->insert([
            'name' => 'Tratament antibiotic în canal',
            'price' => '30'
        ]);

        DB::table('intervention_types')->insert([
            'name' => 'Extracție incisiv',
            'price' => '60'
        ]);

        DB::table('intervention_types')->insert([
            'name' => 'Extracție premolar',
            'price' => '80'
        ]);

        DB::table('intervention_types')->insert([
            'name' => 'Extracție molar',
            'price' => '90'
        ]);

        DB::table('intervention_types')->insert([
            'name' => 'Opturație profundă',
            'price' => '50'
        ]);

        DB::table('intervention_types')->insert([
            'name' => 'Opturație canal',
            'price' => '80'
        ]);

        DB::table('intervention_types')->insert([
            'name' => 'Tratament fisură',
            'price' => '40'
        ]);

        DB::table('intervention_types')->insert([
            'name' => 'Amprentă coroană',
            'price' => '20'
        ]);

        DB::table('intervention_types')->insert([
            'name' => 'Lipire coroană',
            'price' => '15'
        ]);

        DB::table('intervention_types')->insert([
            'name' => 'Tratament paragingival',
            'price' => '35'
        ]);
    }
}
