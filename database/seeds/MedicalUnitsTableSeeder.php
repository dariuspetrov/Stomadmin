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

        DB::table('medical_units')->insert([
            'name' => 'Cabinetul Dr. Grațian Danilescu',
            'address' => 'Antim Nr. 8',
            'phone' => '+40 745 762 213'
        ]);

        DB::table('medical_units')->insert([
            'name' => 'Cabinetul Dr. Vasile Mihailov',
            'address' => 'Republicii Nr. 21',
            'phone' => '+40 743 199 106'
        ]);

        DB::table('medical_units')->insert([
            'name' => 'Cabinetul Dr. Iosif Gantt',
            'address' => 'Apusului Nr. 47',
            'phone' => '+40 745 474 747'
        ]);

        DB::table('medical_units')->insert([
            'name' => 'Cabinetul Dr. Hans Klemmen',
            'address' => 'Bd. Washington Nr 47',
            'phone' => '+40 760 555 493'
        ]);

        DB::table('medical_units')->insert([
            'name' => 'Cabinetul Dr. Hans Kristiansen',
            'address' => 'Nordului Nr. 8',
            'phone' => '+40 722 567 384'
        ]);

        DB::table('medical_units')->insert([
            'name' => 'Cabinetul Dr. Grațiela Lilovan',
            'address' => 'Colentina Nr. 79',
            'phone' => '+40 741 132 583'
        ]);

        DB::table('medical_units')->insert([
            'name' => 'Cabinetul Dr. Adelina Kahon',
            'address' => 'Ardealului Nr. 48',
            'phone' => '+40 767 890 557'
        ]);

        DB::table('medical_units')->insert([
            'name' => 'Cabinetul Dr. Dorina Pavencu',
            'address' => 'Miscarea Populara Nr. 73',
            'phone' => '+40 745 888 678'
        ]);

        DB::table('medical_units')->insert([
            'name' => 'Cabinetul Dr. Vasilea Aglaia',
            'address' => 'Ineu Nr 75',
            'phone' => '+40 743 667 224'
        ]);

        DB::table('medical_units')->insert([
            'name' => 'Cabinetul Dr. Zoe Trahanachiu',
            'address' => 'I. L. Caragiale Nr. 27',
            'phone' => '+40 722 241 333'
        ]);
    }
}
