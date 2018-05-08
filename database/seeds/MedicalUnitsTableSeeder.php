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
		DB::table('medical_units')->insert([
            'name' => 'Clinica Molarul',
            'address' => 'Dunării Nr. 27',
            'phone' => '+40 744 456 123'
        ]);
		DB::table('medical_units')->insert([
            'name' => 'Clinica Radiologie Dentară',
            'address' => 'Primăverii Nr. 14',
            'phone' => '+40 766 555 222'
        ]);
		DB::table('medical_units')->insert([
            'name' => 'Clinica Zâna Măseluță',
            'address' => 'Sorin Titel Nr. 17',
            'phone' => '+40 711 654 987'
        ]);
    }
}
