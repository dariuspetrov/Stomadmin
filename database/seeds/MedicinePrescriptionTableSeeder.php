<?php

use Illuminate\Database\Seeder;

class MedicinePrescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	   DB::table('medicine_prescriptions')->insert([
            'pacient_id' => 4,
            'medicine_id' => 11,
        ]);

     	   DB::table('medicine_prescriptions')->insert([
            'pacient_id' => 4,
            'medicine_id' => 19,
        ]);

     	   DB::table('medicine_prescriptions')->insert([
            'pacient_id' => 4,
            'medicine_id' => 2,
        ]);

     	   DB::table('medicine_prescriptions')->insert([
            'pacient_id' => 6,
            'medicine_id' => 20,
        ]);

     	   DB::table('medicine_prescriptions')->insert([
            'pacient_id' => 6,
            'medicine_id' => 11,
        ]);

     	   DB::table('medicine_prescriptions')->insert([
            'pacient_id' => 6,
            'medicine_id' => 1,
        ]);

     	   DB::table('medicine_prescriptions')->insert([
            'pacient_id' => 6,
            'medicine_id' => 14,
        ]);

     	   DB::table('medicine_prescriptions')->insert([
            'pacient_id' => 7,
            'medicine_id' => 17,
        ]);

     	   DB::table('medicine_prescriptions')->insert([
            'pacient_id' => 7,
            'medicine_id' => 11,
        ]);
    }
}
