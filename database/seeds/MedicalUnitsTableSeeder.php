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
		
		DB::table('medical_units')->insert([
            'name' => 'Clinica Ioan Vereș',
            'address' => 'Spl Independenței Nr. 42',
            'phone' => '+40 711 262 732'
        ]);

		DB::table('medical_units')->insert([
            'name' => 'Clinica Dr. Vasile Zohoran',
            'address' => 'Apicultorilor Nr. 32',
            'phone' => '+40 721 384 897'
        ]);

		DB::table('medical_units')->insert([
            'name' => 'Clinica de Urgente Maxilo-Faciale',
            'address' => 'Take Ionescu Nr. 2',
            'phone' => '+40 731 497 222'
        ]);

		DB::table('medical_units')->insert([
            'name' => 'Clinica Județeană Timișoara',
            'address' => 'Republicii Nr. 43',
            'phone' => '+40 731 444 673'
        ]);

		DB::table('medical_units')->insert([
            'name' => 'Clinica Dr. Igor Aerodromovici',
            'address' => 'Aviatorilor Nr. 34',
            'phone' => '+40 737 747 787'
        ]);

		DB::table('medical_units')->insert([
            'name' => 'Cabinetul Adrian Avian',
            'address' => 'Aeroportului Nr. 43',
            'phone' => '+40 777 320 380'
        ]);
    }
}
